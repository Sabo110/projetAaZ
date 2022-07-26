<?php

namespace App\Tests;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
    public function testistrue(): void
    {
        $categorie = new Categorie();
        $categorie->setName('danger')
                  ->setDescription('vraiment du danger')
                  ->setSlug('bahhh le slug');

        $this->assertTrue($categorie->getName() === 'danger');
        $this->assertTrue($categorie->getDescription() === 'vraiment du danger');
        $this->assertTrue($categorie->getSlug() === 'bahhh le slug');
    }

    public function testisfalse(): void
    {
        $categorie = new Categorie();
        $categorie->setName('danger')
                  ->setDescription('vraiment du danger')
                  ->setSlug('bahhh le slug');
                  
        $this->assertFalse($categorie->getName() === 'dangr');
        $this->assertFalse($categorie->getDescription() === 'vraimnt du danger');
        $this->assertFalse($categorie->getSlug() === 'bahhh le slg');
    }

    public function testisempty(): void
    {
        $categorie = new Categorie();
        
                  
        $this->assertEmpty($categorie->getName());
        $this->assertEmpty($categorie->getDescription());
        $this->assertEmpty($categorie->getSlug());
    }
}
