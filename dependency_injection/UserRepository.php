<?php

namespace DI;

interface UserRepositoryInterface {
    public function store($data);
}

class UserRepository implements UserRepositoryInterface {
    public function store($data)
    {
        return $this->model()->create($data);
    }
}