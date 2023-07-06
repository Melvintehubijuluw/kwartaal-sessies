<?php

namespace ToyType\Model;

use ToyType\Api\ToyTypeInterface;

// Wederom zouden we normaal informatie uit de database laden.

class ToyType implements ToyTypeInterface
{
    public function getId(): int
    {
       return $this->getData('id');
    }

    public function setId(int $id): void
    {
        $this->setData('id', $id);
    }

    public function getName(): string
    {
        return $this->getData('name');
    }

    public function setName(string $name): void
    {
        $this->setData('name', $name);
    }

}