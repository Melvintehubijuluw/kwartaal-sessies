<?php
namespace Toy\Api;

interface ToyInterface
{
    public function getId(): int;
    public function setId(int $id): void;
    public function getName(): string;
    public function setName(string $name): void;
    public function getPrice(): float;
    public function setPrice(float $price): void;
    public function getColor(): string;
    public function setColor(string $color): void;

    /**
     * Wie kan uitleggen wat array<int, int, int> betekent? Wat is de term hiervoor?
     *
     * @return array<int, int, int>
     */
    public function getMeasures(): array;

    /**
     * @param array<int, int, int> $measures
     * @return void
     */
    public function setMeasures(array $measures): void;
}
