<?php

namespace Vendor\Module\Plugin;

use ToyType\Api\Repository\ToyTypeRepositoryInterface;

class StoreToyType
{

    /**
     * @param ToyTypeRepositoryInterface $toyTypeRepository
     */
    public function __construct(protected ToyTypeRepositoryInterface $toyTypeRepository)
    {
    }

    /**
     * @param ToyInterfaceRepository $toy
     * @param $arguments
     * @return void
     */
    public function beforeSave(ToyInterfaceRepository $toy, $arguments) {
        $this->toyTypeRepository->save($toy->getExtensionAttributes()->getToyType());
    }
}