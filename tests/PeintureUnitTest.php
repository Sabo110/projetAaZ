<?php

namespace App\Tests;

use App\Entity\Categorie;
use App\Entity\Peinture;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class PeintureUnitTest extends TestCase
{
    // public function testistrue(): void
    // {
    //     $peinture = new Peinture();
    //     $categirie = new Categorie();
    //     $date = new DateTime();
    //     $user = new User();
    //     $peinture->setName('blanche')
    //              ->setLargeur(101.2)
    //              ->setHauteur(11.2)
    //              ->setEnvente(true)
    //              ->setPrix(111.55)
    //              ->setDateRealisation($date)
    //              ->setDatePublication($date)
    //              ->setDescription('description')
    //              ->setPortfolio(true)
    //              ->setSlug('slug')
    //              ->setFile('file')
    //              ->setUser($user)
    //              ->addCategorie($categirie);

    //     $this->assertTrue($peinture->getName() === 'blanche');
    //     $this->assertTrue($peinture->getLargeur() === 101.2);
    //     $this->assertTrue($peinture->getHauteur() === 11.2);
    //     $this->assertTrue($peinture->isEnvente() === true);
    //     $this->assertTrue($peinture->getPrix() === 111.55);
    //     $this->assertTrue($peinture->getDateRealisation() === $date);
    //     $this->assertTrue($peinture->getDatePublication() === $date);
    //     $this->assertTrue($peinture->getDescription() === 'description');
    //     $this->assertTrue($peinture->isPortfolio() === true);
    //     $this->assertTrue($peinture->getSlug() === 'slug');
    //     $this->assertTrue($peinture->getFile() === 'file');
    //     $this->assertTrue($peinture->getUser() === $user);
    //     $this->assertContains($categirie, $peinture->getCategorie());
    // }

    public function testistrue(): void
    {
        $peinture = new Peinture();
        $categirie = new Categorie();
        $date = new DateTime();
        $user = new User();
        $peinture->setName('blanche')
                 ->setLargeur(111.55)
                 ->setHauteur(11.2)
                 ->setEnvente(true)
                 ->setPrix(111.55)
                 ->setDateRealisation($date)
                 ->setDatePublication($date)
                 ->setDescription('description')
                 ->setPortfolio(true)
                 ->setSlug('slug')
                 ->setFile('file')
                 ->setUser($user)
                 ->addCategorie($categirie);

        $this->assertTrue($peinture->getName() === 'blanche');
        $this->assertTrue($peinture->getLargeur() == 111.55);
        $this->assertTrue($peinture->getHauteur() == 11.2);
        $this->assertTrue($peinture->isEnvente() === true);
        $this->assertTrue($peinture->getPrix() == 111.55);
        $this->assertTrue($peinture->getDateRealisation() === $date);
        $this->assertTrue($peinture->getDatePublication() === $date);
        $this->assertTrue($peinture->getDescription() === 'description');
        $this->assertTrue($peinture->isPortfolio() === true);
        $this->assertTrue($peinture->getSlug() === 'slug');
        $this->assertTrue($peinture->getFile() === 'file');
        $this->assertTrue($peinture->getUser() === $user);
        $this->assertContains($categirie, $peinture->getCategorie());
    }


    public function testisfalse(): void
    {
        $peinture = new Peinture();
        $categirie = new Categorie();
        $date = new DateTime();
        $user = new User();
        $peinture->setName('blanche')
                 ->setLargeur(111.55)
                 ->setHauteur(11.2)
                 ->setEnvente(true)
                 ->setPrix(111.55)
                 ->setDateRealisation($date)
                 ->setDatePublication($date)
                 ->setDescription('description')
                 ->setPortfolio(true)
                 ->setSlug('slug')
                 ->setFile('file')
                 ->setUser($user)
                 ->addCategorie($categirie);

        $this->assertFalse($peinture->getName() === 'blnche');
        $this->assertFalse($peinture->getLargeur() === 11.55);
        $this->assertFalse($peinture->getHauteur() === 1.2);
        $this->assertFalse($peinture->isEnvente() === false);
        $this->assertFalse($peinture->getPrix() === 11.55);
        $this->assertFalse($peinture->getDateRealisation() === new DateTime());
        $this->assertFalse($peinture->getDatePublication() === new DateTime());
        $this->assertFalse($peinture->getDescription() === 'deciption');
        $this->assertFalse($peinture->isPortfolio() === false);
        $this->assertFalse($peinture->getSlug() === 'sug');
        $this->assertFalse($peinture->getFile() === 'fle');
        $this->assertFalse($peinture->getUser() === new User());
        $this->assertNotContains(new Categorie(), $peinture->getCategorie());
    }

    public function testisempty(): void
    {
        $peinture = new Peinture();
       

        $this->assertEmpty($peinture->getName());
        $this->assertEmpty($peinture->getLargeur());
        $this->assertEmpty($peinture->getHauteur());
        $this->assertEmpty($peinture->isEnvente());
        $this->assertEmpty($peinture->getPrix());
        $this->assertEmpty($peinture->getDateRealisation());
        $this->assertEmpty($peinture->getDatePublication());
        $this->assertEmpty($peinture->getDescription());
        $this->assertEmpty($peinture->isPortfolio());
        $this->assertEmpty($peinture->getSlug());
        $this->assertEmpty($peinture->getFile());
        $this->assertEmpty($peinture->getUser());
        $this->assertEmpty($peinture->getCategorie());
    }
}
