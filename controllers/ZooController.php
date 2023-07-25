<?php

namespace unity;

// Wczytanie modeli
require_once 'models/Animal.php';
require_once 'models/Carnivore.php';
require_once 'models/Omnivore.php';
require_once 'models/Herbivore.php';
require_once 'models/AnimalsWithFur.php';
require_once 'models/Tiger.php';
require_once 'models/Elephant.php';
require_once 'models/Fox.php';
require_once 'models/SnowLeopard.php';
require_once 'models/Rabbit.php';

class ZooController
{
    public function index()
    {
        // Przykładowe zwierzęta w ZOO
        $animals = [
            new Tiger('Tygrys Tony'),
            new Elephant('Słoń Elmer'),
            new Fox('Lis Felix'),
            new SnowLeopard('Irbis Sniezny Luna'),
            new Rabbit('Królik Roger')
        ];

        // Wyrenderowanie widoku z listą zwierząt
        require_once 'views/zoo.php';
    }
}

// Użycie kontrolera
$zooController = new ZooController();
$zooController->index();
