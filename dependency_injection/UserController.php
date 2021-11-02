<?php

namespace DI;

class UserController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register($dataUser)
    {
        $user = $this->userService->register($dataUser);
        if($user) {
            echo 'Success';
        } else {
            echo 'Fail';
        }

        return;
    }
}