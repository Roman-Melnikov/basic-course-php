<?php

class Unit
{
    private string $name;
    private int $life;
    private int $powerAttack;

    public function __construct(string $name, int $life, int $powerAttack)
    {
        $this->name = $name;
        $this->life = $life;
        $this->powerAttack = $powerAttack;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function setLife(int $life): void
    {
        $this->life = $life;
    }

    public function getPowerAttack(): int
    {
        return $this->powerAttack;
    }

    public function setPowerAttack(int $powerAttack): void
    {
        $this->powerAttack = $powerAttack;
    }

    public function attack(Unit $otherUser): void
    {
        $otherLife = $otherUser->getLife();
        $otherLife -= $this->getPowerAttack();
        $otherUser->setLife($otherLife);
    }
}