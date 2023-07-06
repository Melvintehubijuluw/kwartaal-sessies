<?php

namespace ToyType\Plugin;

use Toy\Api\ToyInterface;
use ToyType\Api\Repository\ToyTypeRepositoryInterface;
use ToyType\Api\ToyTypeInterface;

class AttachToyTypeExtension
{
    /**
     * Magento geeft ons een ToyTypeRepository waarmee we kunnen werken.
     *
     * @param ToyTypeRepositoryInterface $toyTypeRepository
     */
    public function __construct(protected ToyTypeRepositoryInterface $toyTypeRepository)
    {
    }

    /**
     * Wanneer Toy->getById() wordt aangeroepen ergens in de code, dan voeren we deze functie uit.
     *
     * @param ToyInterface $subject
     * @param ToyInterface $toy
     * @return void
     */
    public function afterGetById(ToyInterface $subject, ToyInterface $toy)
    {
        // Haal de bijbehorende ToyType model op.
        $toyTypeModel = $this->getToyTypeModelByToy($toy);

        // Sla die model op als een extension attribute op de Toy model. Met gebruik van
        // de setToyType model.
        $toy->getExtensionAttributes()->setToyType($toyTypeModel);
    }

    /**
     * Zoals de naam al zegt geeft deze functie ons een ToyType Model terug, aan de hand van een gegeven Toy model.
     * @param ToyInterface $toy
     * @return ToyTypeInterface
     */
    protected function getToyTypeModelByToy(ToyInterface $toy): ToyTypeInterface
    {
        // Het enige wat we moeten weten over deze repository is dat het toyTypes teruggeeft.
        // In dit geval geeft het een toyType model terug aan de hand van een toy id.

        // Waarom doen we dat op deze omslachtige manier?
        // Omdat $toy->getToyTypeId(); niet bestaat op de Toy model.

        // Waarom voegen we die methode/functie niet toe aan toy?

        // 1. We willen dit vanuit de ToyType module doen, zodat we de ToyType module uit kunnen zetten en
        // $toy->getToyTypeId() niet blijft bestaan op de toys model.
        // 2. Open closed principle, bestaande code zo min mogelijk aanpassen.

        return $this->toyTypeRepository->getByToyId($toy->getId());
    }
}