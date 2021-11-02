<?php
namespace ref;

class Author
{
    private $name;
    private $birth;

    public function __construct($name, $birth)
    {
        $this->name = $name;
        $this->birth = $birth;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBirth()
    {
        return $this->birth;
    }

}