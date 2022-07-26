<?php

namespace App\Tests;

use App\Entity\BlogPost;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use DateTime;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testistrue(): void
    {
       $commentaire = new Commentaire();
       $date = new DateTime();
       $peinture = new Peinture();
       $blogpost = new BlogPost();
       $commentaire->setAuteur('auteur')
                   ->setContenu('contenu')
                   ->setEmail('email')
                   ->setDatedepost($date)
                   ->setPeinture($peinture)
                   ->setBlogpost($blogpost);

        $this->assertTrue($commentaire->getAuteur() === 'auteur');
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getEmail() === 'email');
        $this->assertTrue($commentaire->getDatedepost() === $date);
        $this->assertTrue($commentaire->getPeinture() === $peinture);
        $this->assertTrue($commentaire->getBlogpost() === $blogpost);
    }

    public function testisfalse(): void
    {
        $commentaire = new Commentaire();
        $date = new DateTime();
        $peinture = new Peinture();
        $blogpost = new BlogPost();
        $commentaire->setAuteur('auteur')
                    ->setContenu('contenu')
                    ->setEmail('email')
                    ->setDatedepost($date)
                    ->setPeinture($peinture)
                    ->setBlogpost($blogpost);
 
         $this->assertFalse($commentaire->getAuteur() === 'aueur');
         $this->assertFalse($commentaire->getContenu() === 'cntenu');
         $this->assertFalse($commentaire->getEmail() === 'emal');
         $this->assertFalse($commentaire->getDatedepost() === new DateTime());
         $this->assertFalse($commentaire->getPeinture() === new Peinture());
         $this->assertFalse($commentaire->getBlogpost() === new BlogPost());
    }

    public function testisempty(): void
    {
        $commentaire = new Commentaire();
        
 
         $this->assertEmpty($commentaire->getAuteur());
         $this->assertEmpty($commentaire->getContenu());
         $this->assertEmpty($commentaire->getEmail());
         $this->assertEmpty($commentaire->getDatedepost());
         $this->assertEmpty($commentaire->getPeinture());
         $this->assertEmpty($commentaire->getBlogpost());
    }
}
