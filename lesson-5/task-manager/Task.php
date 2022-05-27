<?php

class Task
{
    private string $description;
    private string $dateCreated;
    private string $dateUpdated;
    private string $dateDone;
    private int $priority = 3;
    private bool $isDone = false;
    private User $user;
    private array $comments = [];

    public function __construct(User $user)
    {
        $this->user = $user;
        $description = readline('Опишите задачу' . PHP_EOL);
        $this->setDescription($description);
        $this->setDateCreated();
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated();
    }

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function setDateCreated(): void
    {
        $this->dateCreated = (new DateTime())->format('d.m.Y H:i');
    }

    public function getDateUpdated(): string
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(): void
    {
        $this->dateUpdated = (new DateTime())->format('d.m.Y H:i');
    }

    public function getDateDone(): string
    {
        return $this->dateDone;
    }

    public function setDateDone(): void
    {
        $this->dateDone = (new DateTime())->format('d.m.Y H:i');
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    public function setIsDone(): void
    {
        $this->isDone = !$this->isDone;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments(string $userName, string $text): void
    {
        $this->comments = array_merge_recursive($this->comments, [$userName => $text]);
    }

    public function markAsDone(): void
    {
        $this->setIsDone();
        $this->setDateUpdated();
        $this->setDateDone();
    }
}
//class Task на $userнет геттера. Не надо readlineв конструктор! Это не его задача считывать данные.