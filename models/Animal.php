<?php

namespace unity;
abstract class Animal
{
    protected string $species;
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return "{$this->species} {$this->name}";
    }
}