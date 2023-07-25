<?php 

namespace unity;

class AnimalWithFur extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function groom(): void
    {
        echo "{$this->name} ma pięknie wyczesane futro.\n";
    }
}