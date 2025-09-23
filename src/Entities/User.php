<?php

declare(strict_types=1);

namespace App\Entities;

/**
 * Class User
 *
 * Represents a user in the system.
 */
class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $passwordHash;

    /**
     * User constructor.
     *
     * @param int $id
     * @param string $name
     * @param string $email
     * @param string $passwordHash
     */
    public function __construct(int $id, string $name, string $email, string $passwordHash)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    /**
     * @param string $newHash
     */
    public function setPasswordHash(string $newHash): void
    {
        $this->passwordHash = $newHash;
    }
}
