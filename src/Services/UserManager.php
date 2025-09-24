<?php

declare(strict_types=1);

namespace App\Services;

use App\Entities\User;
use App\Services\Validator;
use App\Database\Database;
use PDO;

/**
 * Classe UserManager
 *
 * Gerencia o registro, login e redefinição de senha de usuários usando SQLite.
 */
class UserManager
{
    private readonly PDO $db;

    public function __construct()
    {
        // Conecta ao banco SQLite
        $this->db = Database::getConnection();
    }

    /**
     * Registra um novo usuário após validações.
     *
     * @param string $name Nome do usuário
     * @param string $email E-mail do usuário
     * @param string $password Senha do usuário
     * @return array ['success' => bool, 'message' => string, 'data' => ?User]
     */
    public function registerUser(string $name, string $email, string $password): array
    {
        $error = Validator::validateNewUser(
            $name,
            $email,
            $password,
            fn(string $email): bool => $this->getUserByEmail($email) === null
        );

        if ($error !== null) {
            return [
                'success' => false,
                'message' => $error,
                'data' => null,
            ];
        }

        $stmt = $this->db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([
            $name,
            $email,
            password_hash($password, PASSWORD_DEFAULT),
        ]);

        // Obter ID do usuário inserido
        $userId = (int) $this->db->lastInsertId();

        $user = new User($userId, $name, $email, password_hash($password, PASSWORD_DEFAULT));

        return [
            'success' => true,
            'message' => 'Usuário cadastrado com sucesso.',
            'data' => $user,
        ];
    }

    /**
     * Realiza login do usuário com e-mail e senha.
     *
     * @param string $email
     * @param string $password
     * @return array ['success' => bool, 'message' => string, 'data' => ?User]
     */
    public function login(string $email, string $password): array
    {
        $user = $this->getUserByEmail($email);

        if (!$user || !password_verify($password, $user->getPasswordHash())) {
            return [
                'success' => false,
                'message' => 'Credenciais inválidas.',
                'data' => null,
            ];
        }

        return [
            'success' => true,
            'message' => 'Login realizado com sucesso.',
            'data' => $user,
        ];
    }

    /**
     * Redefine a senha de um usuário existente.
     *
     * @param int $userId
     * @param string $newPassword
     * @return array ['success' => bool, 'message' => string]
     */
    public function resetPassword(int $userId, string $newPassword): array
    {
        if (!Validator::isStrongPassword($newPassword)) {
            return [
                'success' => false,
                'message' => 'A senha deve ter pelo menos 8 caracteres e incluir uma letra maiúscula e um número.',
            ];
        }

        $stmt = $this->db->prepare("UPDATE users SET password = ? WHERE id = ?");
        $stmt->execute([
            password_hash($newPassword, PASSWORD_DEFAULT),
            $userId,
        ]);

        if ($stmt->rowCount() === 0) {
            return [
                'success' => false,
                'message' => 'Usuário não encontrado.',
            ];
        }

        return [
            'success' => true,
            'message' => 'Senha redefinida com sucesso.',
        ];
    }

    /**
     * Busca um usuário pelo ID.
     *
     * @param int $id
     * @return User|null
     */
    public function getUserById(int $id): ?User
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new User((int) $row['id'], $row['name'], $row['email'], $row['password']);
    }

    /**
     * Busca um usuário pelo e-mail.
     *
     * @param string $email
     * @return User|null
     */
    public function getUserByEmail(string $email): ?User
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new User((int) $row['id'], $row['name'], $row['email'], $row['password']);
    }

    /**
     * Retorna todos os usuários do banco.
     *
     * @return User[]
     */
    public function getAllUsers(): array
    {
        $stmt = $this->db->query("SELECT * FROM users");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = [];
        foreach ($rows as $row) {
            $users[] = new User((int) $row['id'], $row['name'], $row['email'], $row['password']);
        }

        return $users;
    }
}
