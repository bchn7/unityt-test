<?php 

namespace unity;

class Omnivore extends Animal
{
    protected string $diet = 'wszystkożerne';

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->species = 'Wszystkożerny';
    }

    public function eatMeat(): void
    {
        echo "{$this->name} zjada mięso.\n";
    }

    public function eatPlants(): void
    {
        echo "{$this->name} spożywa rośliny.\n";
    }
}