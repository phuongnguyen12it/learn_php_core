<?php
namespace DI;
require_once (__DIR__.'/Container.php');
require_once (__DIR__.'/UserController.php');
require_once (__DIR__.'/UserService.php');

$container = new Container();
// Bind Interface với class Implementation
$container->bind(UserRepositoryInterface::class, UserRepository::class);
// Resolve instance của UserController
$userController = $container->make(UserController::class);
$userController->register('$dataUser');  // 'Success' by echo