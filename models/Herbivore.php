<?php

namespace unity;

class Herbivore extends Animal
{
    protected string $diet = 'roślinożerne';

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->species = 'Roślinożerny';
    }

    public function eatPlants(): void
    {
        echo "{$this->name} spożywa rośliny.\n";
    }
}