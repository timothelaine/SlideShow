<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SlideRepository")
 */
class Slide
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SlideUpload", mappedBy="slide")
     */
    private $slideUploads;

    public function __construct()
    {
        $this->slideUploads = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return Collection|SlideUpload[]
     */
    public function getSlideUploads(): Collection
    {
        return $this->slideUploads;
    }

    public function addSlideUpload(SlideUpload $slideUpload): self
    {
        if (!$this->slideUploads->contains($slideUpload)) {
            $this->slideUploads[] = $slideUpload;
            $slideUpload->setSlide($this);
        }

        return $this;
    }

    public function removeSlideUpload(SlideUpload $slideUpload): self
    {
        if ($this->slideUploads->contains($slideUpload)) {
            $this->slideUploads->removeElement($slideUpload);
            // set the owning side to null (unless already changed)
            if ($slideUpload->getSlide() === $this) {
                $slideUpload->setSlide(null);
            }
        }

        return $this;
    }
}
