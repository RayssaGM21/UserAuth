<?php
declare(strict_types=1);

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UserController;

$action = $_GET['action'] ?? 'home';
$userController = new UserController();

switch ($action) {
    case 'register':
        $userController->register();
        break;
    case 'login':
        $userController->login();
        break;
    case 'logout':
        $userController->logout();
        break;
    case 'users':
        $userController->listUsers();
        break;
    case 'resetPassword':
        $userController->resetPassword();
        break;
    default:
        $userController->home();
        break;
}
