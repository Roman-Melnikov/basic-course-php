<?php

require_once 'Task.php';

class TaskProvider
{
    private array $tasks = [
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

    public function addTask(string $description): void
    {
        $this->tasks[$description] = false;
    }
}