<?php
namespace Generated\Toy\Api;

use ToyType\Api\ToyTypeInterface;

interface ToyExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    public function getToyType(): ToyTypeInterface;
    public function setToyType(ToyTypeInterface $toyType): void;
}