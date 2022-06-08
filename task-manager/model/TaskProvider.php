<?php
require_once 'Task.php';

class TaskProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addTask(Task $task, int $user_id): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO tasks (description, isDone, user_id) VALUES (:description, :isDone, :user_id)');
        return $statement->execute(['description' => $task->getDescription(), 'isDone' => $task->isDone(), 'user_id' => $user_id]);
    }

    public function getUndoneList(int $id): ?array
    {
        $result = [];
        $statement = $this->pdo->prepare('SELECT * FROM tasks WHERE isDone = "" AND user_id = ?');
        $statement->execute([$id]);
        while ($statement && $task = $statement->fetchObject(Task::class)) {
            $result[] = $task;
        }
        return count($result) ? $result : null;
    }

    public function isDone(int $id): bool
    {
        $statement = $this->pdo->prepare('UPDATE tasks SET isDone = true WHERE id = ?');
        return $statement->execute([$id]);
    }
}