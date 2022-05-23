<?php

class Cart
{
    private array $products = [];
    private float $totalSum = 0;

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    public function addProduct(Product $product, int $count = 1): void
    {
        $productsArr = $this->getProducts();
        $productsArr = array_merge_recursive($productsArr, [$product->getTitle() => $count]);
        $this->setProducts($productsArr);
        $this->updateTotalSum($product, true, $count);
    }

    public function removeProduct(Product $product, int $count = 1): void
    {
        $this->updateTotalSum($product, false, $count);
        $productsArr = $this->getProducts();
        if ($productsArr[$product->getTitle()] > $count) {
            $productsArr[$product->getTitle()] = $productsArr[$product->getTitle()] - $count;
        } else {
            unset($productsArr[$product->getTitle()]);
        }
        $this->setProducts($productsArr);
    }

    public function getTotalSum()
    {
        return $this->totalSum;
    }

    public function setTotalSum($totalSum): void
    {
        $this->totalSum = $totalSum;
    }

    public function updateTotalSum(Product $product, bool $plus, int $count): void
    {
        $totalSum = $this->totalSum;
        $totalSum = $plus ? $totalSum += $product->getPrice() * $count : $totalSum -= $product->getPrice() * $count;
        $this->setTotalSum($totalSum);
    }
}