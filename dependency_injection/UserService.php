<?php

namespace DI;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register($dataUser)
    {
        return $this->userRepository->store($dataUser);
    }
}