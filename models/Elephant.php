<?php 

namespace unity;

class Elephant extends Herbivore
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}