<?php

namespace App\Tests;

use App\Entity\BlogPost;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class BlogPostUnitTest extends TestCase
{
    public function testistrue(): void
    {
        $post = new BlogPost();
        $date = new DateTime();
        $user = new User();
        $post->setTitre('title')
             ->setContenu('contenu')
             ->setSlug('slug')
             ->setDatecreation($date)
             ->setUser($user);

        $this->assertTrue($post->getTitre() === 'title');
        $this->assertTrue($post->getContenu() === 'contenu');
        $this->assertTrue($post->getSlug() === 'slug');
        $this->assertTrue($post->getDatecreation() === $date);
        $this->assertTrue($post->getUser() === $user);
    }

    public function testisfalse(): void
    {
        $post = new BlogPost();
        $date = new DateTime();
        $user = new User();
        $post->setTitre('title')
             ->setContenu('contenu')
             ->setSlug('slug')
             ->setDatecreation($date)
             ->setUser($user);

        $this->assertFalse($post->getTitre() === 'tite');
        $this->assertFalse($post->getContenu() === 'cntenu');
        $this->assertFalse($post->getSlug() === 'slu');
        $this->assertFalse($post->getDatecreation() === new DateTime());
        $this->assertFalse($post->getUser() === new User);
    }

    public function testisempty(): void
    {
        $post = new BlogPost();
        

        $this->assertEmpty($post->getTitre() );
        $this->assertEmpty($post->getContenu());
        $this->assertEmpty($post->getSlug());
        $this->assertEmpty($post->getDatecreation());
        $this->assertEmpty($post->getUser());
    }
}
