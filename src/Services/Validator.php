<?php

declare(strict_types=1);

namespace App\Services;

/**
 * Class Validator
 *
 * Contém métodos estáticos para validar a entrada do usuário.
 */
class Validator
{
    /**
     * Valida um e-mail.
     *
     * @param string $email
     * @return bool
     */
    public static function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Verifica se uma senha é forte.
     *
     * @param string $password
     * @return bool
     */
    public static function isStrongPassword(string $password): bool
    {
        return strlen($password) >= 8 &&
               preg_match('/[A-Z]/', $password) &&
               preg_match('/[0-9]/', $password);
    }

    /**
     * Valida todos os dados do usuário antes do registro.
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @param callable $checkEmailUnique
     * @return string|null Error message or null if valid
     */
    public static function validateNewUser(string $name, string $email, string $password, callable $checkEmailUnique): ?string
    {
        if (empty($name)) {
            return "O nome não pode estar vazio.";
        }

        if (!self::isValidEmail($email)) {
            return "Endereço de e-mail inválido.";
        }

        if (!$checkEmailUnique($email)) {
            return "O e-mail já está em uso.";
        }

        if (!self::isStrongPassword($password)) {
            return "A senha deve ter pelo menos 8 caracteres e incluir uma letra maiúscula e um número.";
        }

        return null;
    }
}
