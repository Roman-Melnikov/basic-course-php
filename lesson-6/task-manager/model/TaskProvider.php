<?php

require_once 'Task.php';

class TaskProvider
{
    private array $tasks = [             //нужно было сохранять задачи в сессии
        'Сходить в магазин' => true,
        'Погулять с собакой' => false,
        'Сделать домашку' => false,
    ];

    public function getUndoneList(): ?array
    {
        $undoneListArr = [];
        foreach ($this->tasks as $index => $value) {
            if ($value === false) {
                $undoneListArr[] = new Task($index, $value);
            }
        }
        return count($undoneListArr) ? $undoneListArr : null;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function setTasks(array $tasks): void
    {
        $this->tasks = $tasks;
    }

    public function addTask(string $description): void
    {
        $newTasks = $this->getTasks();
        $newTasks[$description] = false;
        $this->setTasks($newTasks);
    }
}