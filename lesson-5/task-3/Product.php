<?php

class Product
{
    private string $title;
    private float $price;
    private ?array $components;

    public function __construct(string $title, ?float $price, ?array $components)
    {
        $this->setTitle($title);
        $this->price = array_sum($components) ?? $price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getComponents(): ?array
    {
        return $this->components;
    }

    public function setComponents(?array $components): void
    {
        $this->components = $components;
    }
}
//class Product в setComponents как то надо пересчитывать стоимость тогда.