<?php

require_once 'User.php';

class UserProvider
{
    private array $accounts = [
      'Roma' => '12345',
    ];

    public function getByUsernameAndPassword(?string $username, ?string $password): ?User
    {
        $expectedPassword = $this->accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return new User($username);
        }
        return null;
    }
}