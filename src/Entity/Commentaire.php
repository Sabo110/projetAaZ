<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $auteur;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'text')]
    private $contenu;

    #[ORM\Column(type: 'datetime')]
    private $datedepost;

    #[ORM\ManyToOne(targetEntity: Peinture::class, inversedBy: 'commentaires')]
    private $peinture;

    #[ORM\ManyToOne(targetEntity: BlogPost::class, inversedBy: 'commentaires')]
    private $blogpost;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatedepost(): ?\DateTimeInterface
    {
        return $this->datedepost;
    }

    public function setDatedepost(\DateTimeInterface $datedepost): self
    {
        $this->datedepost = $datedepost;

        return $this;
    }

    public function getPeinture(): ?Peinture
    {
        return $this->peinture;
    }

    public function setPeinture(?Peinture $peinture): self
    {
        $this->peinture = $peinture;

        return $this;
    }

    public function getBlogpost(): ?BlogPost
    {
        return $this->blogpost;
    }

    public function setBlogpost(?BlogPost $blogpost): self
    {
        $this->blogpost = $blogpost;

        return $this;
    }
}
