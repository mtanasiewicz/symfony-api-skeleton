<?php

namespace App\Shared\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Shared\Model\Repository\SomeEntityRepository")
 */
class SomeEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $someField;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSomeField(): ?string
    {
        return $this->someField;
    }

    public function setSomeField(?string $someField): self
    {
        $this->someField = $someField;

        return $this;
    }
}
