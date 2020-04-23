<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UploadRepository")
 */
class Upload
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
     * @ORM\OneToMany(targetEntity="App\Entity\SlideUpload", mappedBy="upload")
     */
    private $slideUploads;

    public function __construct()
    {
        $this->slideUploads = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

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
            $slideUpload->setUpload($this);
        }

        return $this;
    }

    public function removeSlideUpload(SlideUpload $slideUpload): self
    {
        if ($this->slideUploads->contains($slideUpload)) {
            $this->slideUploads->removeElement($slideUpload);
            // set the owning side to null (unless already changed)
            if ($slideUpload->getUpload() === $this) {
                $slideUpload->setUpload(null);
            }
        }

        return $this;
    }
}
