<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Usager;


class UsagerFixtures extends Fixture
{
    private $faker;

    public function __construct(){
        $this->faker=Factory::create("fr_FR");
 }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<10;$i++){
            $usager = new Usager();
            $usager->setNom($this->faker->lastName())
            ->setPrenom($this->faker->firstName())
            ->setadresse($this->faker->address())
            ->setville($this->faker->address())
            ->setcode_postal($this->faker->postcode())
            ->settelfixe($this->faker->phone_number())
            ->settelmobil($this->faker->phone_number())
            ->setmel(strtolower($usager->getPrenom()).'.'.strtolower($usager->getNom()).'@'.$this->faker->freeEmailDomain());           
            $this->addReference('usager'.$i, $usager);
            $manager->persist($usager);
        }
        $manager->flush();
    }
}