<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // Données en français

        for ($i = 0; $i < 10; $i++) {
            // Création du profil
            $user = new User();
            $user->setEmail($faker->email());
            $user->setRoles(["admin"]);
            $user->setPassword(password_hash('password', PASSWORD_BCRYPT));
            $user->setPrenom($faker->firstName());
            $user->setNom($faker->lastName());
            $user->setAdresse($faker->address());
            $manager->persist($user);
        }

        $manager->flush();
    }
}

