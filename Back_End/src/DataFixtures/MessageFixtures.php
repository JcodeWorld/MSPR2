<?php

namespace App\DataFixtures;

use App\Entity\Message;
use App\Entity\Action;
use App\Entity\UserAdmin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class MessageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // 
        $statut="A_Traiter";
        for ($i = 0; $i < 10; $i++) {
            // Création de message
            $message = new Message();
            $message->setNomMessage($faker->lastName());
            $message->setPrenomMessage($faker->firstName());
            $message->setAdresseMessage($faker->address());
            $message->setAdresseMailMessage($faker->email());
            $message->setTelephoneMessage($faker->phoneNumber());
            $message->setTexteMessage($faker->text());
            $message->setStatutMessage($statut);       $manager->persist($message);
        }
        $manager->flush();
    }
}

