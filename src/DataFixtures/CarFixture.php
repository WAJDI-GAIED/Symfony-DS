<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Voiture;

class CarFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++) {

            $car = new Voiture();

            $car->setMarque("BMW " . $i);

            $car->setCouleur("Noir " . $i);

            $car->setPrix("200.000" . $i);

            $manager->persist($car);

        }

        $manager->flush();
    }
}
