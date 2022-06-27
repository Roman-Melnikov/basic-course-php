<?php
require_once 'User.php';

class UserProvider
{
    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertUser(User $user, string $pass): bool
    {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $statement = $this->pdo->prepare(
            'INSERT INTO users (name, username, password) VALUES (:name, :username, :password)'
        );
        return $statement->execute([
            'name' => $user->getName(),
            'username' => $user->getUsername(),
            'password' => $hash
        ]);
    }

    public function getByUsernameAndPassword(?string $username, ?string $password): ?User
    {
        $statement = $this->pdo->prepare('SELECT id, name, password FROM users WHERE username = ?');
        $statement->execute([$username]);
        $user = $statement->fetch();

        if (password_verify($password, $user['password'])) {
            $currentUser = new User($username);
            $currentUser->setName($user['name']);
            $currentUser->setId($user['id']);
            return $currentUser;
        }
        return null;
    }
}