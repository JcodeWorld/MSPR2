<?php

namespace App\DataFixtures;

use App\Entity\UserAdmin;
use App\Entity\Profil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // Génère des données en français

        for ($i = 0; $i < 10; $i++) {
            $user = new UserAdmin();
            $user->setUserUserAdmin($faker->userName);
            $user->setPasswordUserAdmin(password_hash('password', PASSWORD_BCRYPT));

            // Création d’un profil fictif associé
            $profil = new Profil();
            $profil->setLibelleProfil($faker->jobTitle);
            $manager->persist($profil);

            $user->setProfilIdProfil($profil);

            $manager->persist($user);
        }

        $manager->flush();
    }
}
