<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testistrue(): void
    {
       $user = new User();
       $user->setName('yoba sabo')
            ->setLastname('jalloud phanuel')
            ->setEmail('samirphanuel@gmail.com')
            ->setPassword('femme')
            ->setPhone('659182723')
            ->setInstagram('lamet')
            ->setApropos('bahh moi meme');

            $this->assertTrue($user->getName() === 'yoba sabo');
            $this->assertTrue($user->getLastname() === 'jalloud phanuel');
            $this->assertTrue($user->getEmail() === 'samirphanuel@gmail.com');
            $this->assertTrue($user->getPassword() === 'femme');
            $this->assertTrue($user->getPhone() === '659182723');
            $this->assertTrue($user->getInstagram() === 'lamet');
            $this->assertTrue($user->getApropos() === 'bahh moi meme');
    }

    public function testisfalse(): void
    {
        $user = new User();
       $user->setName('yoba sabo')
            ->setLastname('jalloud phanuel')
            ->setEmail('samirphanuel@gmail.com')
            ->setPassword('femme')
            ->setPhone('659182723')
            ->setInstagram('lamet')
            ->setApropos('bahh moi meme');

            $this->assertFalse($user->getName() === ' sabo');
            $this->assertFalse($user->getLastname() === ' phanuel');
            $this->assertFalse($user->getEmail() === 'samhanuel@gmail.com');
            $this->assertFalse($user->getPassword() === 'fee');
            $this->assertFalse($user->getPhone() === '659123');
            $this->assertFalse($user->getInstagram() === 'laet');
            $this->assertFalse($user->getApropos() === 'bh moi meme');
    }

    public function testisempty(): void
    {
        $user = new User();
       

            $this->assertEmpty($user->getName());
            $this->assertEmpty($user->getLastname());
            $this->assertEmpty($user->getEmail());
            $this->assertEmpty($user->getPassword());
            $this->assertEmpty($user->getPhone());
            $this->assertEmpty($user->getInstagram());
            $this->assertEmpty($user->getApropos());
    }
}
