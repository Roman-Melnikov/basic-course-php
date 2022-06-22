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

    public function insertUser(User $user, string $pass): int
    {
        $this->checkUniqueLogin($user);//проверим уникальность логина
        $this->checkLengthLogin($user);//проверим длину логина

        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $statement = $this->pdo->prepare(
            'INSERT INTO users (name, username, password) VALUES (:name, :username, :password)'
        );
        $statement->execute([
            'name' => $user->getName(),
            'username' => $user->getUsername(),
            'password' => $hash
        ]);
        return (int)$this->pdo->lastInsertId();
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

    public function checkUniqueLogin(User $user): void
    {
        $checkLoginStatement = $this->pdo->prepare(
            'SELECT * FROM users WHERE username = ?'
        );
        $checkLoginStatement->execute([$user->getUsername()]);
        $loginBool = $checkLoginStatement->fetch();
        if ($loginBool) {
            throw new Exception('Пользователь с таким логином уже зарегистрирован');
        }
    }

    public function checkLengthLogin(User $user): void
    {
        $length = strlen($user->getUsername());

        if ($length > 30) {
            throw new Exception('Длина логина не должна превышать 30 символов');
        }
    }
}