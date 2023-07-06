<?php

namespace ToyType\Api\Repository;

use ToyType\Api\ToyTypeInterface;

interface ToyTypeRepositoryInterface
{
    public function getByToyId(int $toyId): ToyTypeInterface;
    public function getById(int $id): ToyTypeInterface;

    public function save(ToyTypeInterface $toyType): void;
}