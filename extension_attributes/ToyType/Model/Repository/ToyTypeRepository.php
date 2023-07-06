<?php
namespace ToyType\Model\Repository;

use ToyType\Api\Repository\ToyTypeRepositoryInterface;
use ToyType\Api\ToyTypeInterface;
use ToyType\Model\ToyType;

class ToyTypeRepository implements ToyTypeRepositoryInterface
{
    public function getByToyId(int $toyId): ToyTypeInterface
    {
        // Normaal zouden we hier database logic hebben om de toyType op te halen.
        // Psuedo code:
        // SELECT toy_type_id FROM toys WHERE id = $toyId

        $toyTypeId = 1;
        return $this->getById($toyTypeId);
    }

    public function getById(int $id): ToyTypeInterface
    {
        // Normaal zouden we hier database logic hebben voor het ophalen van de toy type, maar dat is buiten scope van
        // deze kwartaalsessie. M.a.w. hier hadden we geen tijd meer voor :)=.

        $toyType = new ToyType();
        $toyType->setId($id);
        $toyType->setName('Fruits');

        return $toyType;
    }

}