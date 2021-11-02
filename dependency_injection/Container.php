<?php

namespace DI;

class Container
{
    /**
     * @var array
     */
    protected $instance = [];

    /**
     * Register class or interface for container
     * @param $abstract
     * @param $concrete
     */
    public function bind($abstract, $concrete = null)
    {
        if (is_null($concrete)) {
            $concrete = $abstract;
        }
        $this->instance[$abstract] = $concrete;
    }

    public function make($abstract, $parameters = [])
    {
        if (!isset($this->instance[$abstract])) {
            $this->bind($abstract);
        }
        return $this->resolve($this->instance[$abstract], $parameters);
    }

    /**
     * Sử dụng Reflection và đệ quy (hàm resolveDependencies)
     * để inspect class và lấy các class dependency của nó cho đến hết
     * @param $concrete
     * @param $parameter
     * @return mixed|object
     * @throws \ReflectionException
     */
    protected function resolve($concrete, $parameter)
    {
        if ($concrete instanceof \Closure) {
            return $concrete($this, $parameter);
        }
        $reflector = new \ReflectionClass($concrete);

        if (!$reflector->isInstantiable()) {
            throw new \Exception("Class {$concrete} is not instantiable");
        }

        $constructor = $reflector->getConstructor();

        if (is_null($constructor)) {
            return $reflector->newInstance();
        }

        $parameter = $constructor->getParameters();
        $dependencies = $this->resolveDependencies($parameter);

        return $reflector->newInstanceArgs($dependencies);
    }

    /**
     * Sử dụng Reflection và đệ quy để
     * inspect class và lấy các class dependency của nó cho đến hết
     * @param $parameters
     * @return array
     * @throws \Exception
     */
    protected function resolveDependencies($parameters)
    {
        $dependencies = [];
        foreach ($parameters as $parameter) {
            $dependency = $parameter->getClass();
            if (is_null($dependencies)) {
                if ($parameters->isDefauValueAvailable()) {
                    $dependencies[] = $parameter->getDefaultValue();
                } else {
                    throw new \Exception("Can not resolve dependency {$parameter->name}");
                }
            } else {
                $dependencies[] = $this->make($dependency->name);
            }
        }
        return $dependencies;
    }
}