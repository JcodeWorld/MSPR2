<?php

namespace App\DataFixtures;

use App\Entity\UserAdmin;
use App\Entity\Profil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserAdminFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // Données en français

        for ($i = 0; $i < 10; $i++) {
            // Création du profil
            $profil = new Profil();
            $profil->setNomProfil($faker->lastName());
            $profil->setPrenomProfil($faker->firstName());
            $profil->setAdresseProfil($faker->address());
            $profil->setAdresseMailProfil($faker->email());
            $manager->persist($profil);

            // Création de l'utilisateur admin
            $user = new UserAdmin();
            $user->setUserUserAdmin($faker->userName());
            $user->setPasswordUserAdmin(password_hash('password', PASSWORD_BCRYPT));
            $user->setProfilIdProfil($profil); // Association du profil
            $manager->persist($user);
        }

        $manager->flush();
    }
}

