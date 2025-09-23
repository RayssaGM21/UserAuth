<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\UserManager;

class UserController
{
    private UserManager $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    public function home(): void
    {
        require __DIR__ . '/../../views/home.php';
    }

    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            $result = $this->userManager->registerUser($name, $email, $password);

            $_SESSION['flash_message'] = $result['message'];
            $_SESSION['flash_type'] = $result['success'] ? 'success' : 'error';

            if ($result['success']) {
                header('Location: index.php?action=login');
                exit;
            } else {
                require __DIR__ . '/../../views/register.php';
            }
        } else {
            require __DIR__ . '/../../views/register.php';
        }
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            $result = $this->userManager->login($email, $password);

            if ($result['success']) {
                $_SESSION['user_email'] = $email;
                $_SESSION['flash_message'] = 'Login realizado com sucesso!';
                $_SESSION['flash_type'] = 'success';

                header('Location: index.php?action=users');
                exit;
            } else {
                $_SESSION['flash_message'] = $result['message'];
                $_SESSION['flash_type'] = 'error';
                require __DIR__ . '/../../views/login.php';
            }
        } else {
            require __DIR__ . '/../../views/login.php';
        }
    }

    public function logout(): void
    {
        session_destroy();
        header('Location: index.php');
        exit;
    }

    public function listUsers(): void
    {
        if (!isset($_SESSION['user_email'])) {
            $_SESSION['flash_message'] = 'Você precisa estar logado para acessar esta página.';
            $_SESSION['flash_type'] = 'error';
            header('Location: index.php?action=login');
            exit;
        }

        $users = $this->userManager->getAllUsers();
        require __DIR__ . '/../../views/user_list.php';
    }

    public function resetPassword(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = (int)($_POST['user_id'] ?? 0);
            $newPassword = $_POST['new_password'] ?? '';

            $result = $this->userManager->resetPassword($userId, $newPassword);

            $_SESSION['flash_message'] = $result['message'];
            $_SESSION['flash_type'] = $result['success'] ? 'success' : 'error';

            header('Location: index.php?action=users');
            exit;
        }
    }
}
