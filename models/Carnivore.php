<?php 

namespace unity;

class Carnivore extends Animal
{
    protected string $diet = 'mięsożerne';

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->species = 'Mięsożerny';
    }

    public function eatMeat(): void
    {
        echo "{$this->name} zjada mięso.\n";
    }
}
