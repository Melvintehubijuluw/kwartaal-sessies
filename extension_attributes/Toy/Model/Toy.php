<?php
namespace Toy\Model;

use Magento\AbstractExtensibleModel;
use Toy\Api\ToyInterface;

class Toy extends AbstractExtensibleModel implements ToyInterface
{
    public function getId(): int
    {
        return $this->getData('id');
    }

    public function setId(int $id): void
    {
        $this->setData('id', $id);
    }

    function getName(): string
    {
        return $this->getData('name');
    }

    public function setName(string $name): void
    {
        $this->setData('name', $name);
    }

    public
    function getPrice(): float
    {
        return $this->getData('price');
    }

    public function setPrice(float $price): void
    {
        $this->setData('price', $price);
    }

    public function getColor(): string
    {
        return $this->getData('color');
    }

    public function setColor(string $color): void
    {
        $this->setData('color', $color);
    }

    public
    function getMeasures(): array
    {
        return $this->getData('measures');
    }

    public function setMeasures(array $measures): void
    {
        $this->setData('measures', $measures);
    }
}