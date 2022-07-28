<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use App\Entity\Categorie;
use App\Entity\Peinture;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // utilisation de faker creer une instance de faker et genere des donnees francais
        $faker = Factory::create('fr_FR');

        $user = new User();
        $user->setEmail('user@test.com')
             ->setLastname($faker->lastName())
             ->setName($faker->name())
             ->setPhone($faker->phoneNumber())
             ->setApropos($faker->text())
             ->setInstagram('instagram')
             ->setPassword('test');
           $manager->persist($user);
        // creation de 10 faux articles
        for ($i=0; $i < 10; $i++) { 
           $blogpost = new BlogPost();
           $blogpost->setTitre($faker->words(3, true))
                    ->setContenu($faker->text())
                    ->setDatecreation($faker->dateTime())
                    ->setSlug($faker->slug(3))
                    ->setUser($user);

                    
            $manager->persist($blogpost);

        }
         for ($k=0; $k < 5; $k++) { 
            $categorie = new Categorie();
            $categorie->setName($faker->words(3, true))
                      ->setDescription($faker->text())
                      ->setSlug($faker->slug(3, true));
            $manager->persist($categorie);

            for ($j=0; $j < 2; $j++) { 
                $peinture = new Peinture();
                $peinture->setName($faker->words(3, true))
                         ->setLargeur($faker->randomFloat(2, 0, 20))
                         ->setHauteur($faker->randomFloat(2, 0, 20))
                         ->setEnvente($faker->randomElement([true, false]))
                         ->setDateRealisation($faker->dateTimeBetween('-30 years', 'now'))
                         ->setDatePublication($faker->dateTimeBetween('-30 years', 'now'))
                         ->setDescription($faker->text())
                         ->setPortfolio($faker->randomElement([true, false]))
                         ->setSlug($faker->slug(3, true))
                         ->setFile('images/fond1.jpg')
                         ->addCategorie($categorie)
                         ->setPrix($faker->randomFloat(2, 10, 1000))
                         ->setUser($user);
                $manager->persist($peinture);
            }
         }
        $manager->flush();
    }
}
