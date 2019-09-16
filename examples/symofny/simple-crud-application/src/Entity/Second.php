<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SecondRepository")
 */
class Second
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\First")
     * @ORM\JoinColumn(name="first_id", referencedColumnName="id")
     */
    private $first;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirst()
    {
        return $this->first;
    }

    public function setFirst($first): self
    {
        $this->first = $first;

        return $this;
    }
}
