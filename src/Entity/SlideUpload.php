<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SlideUploadRepository")
 */
class SlideUpload
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Slide", inversedBy="slideUploads")
     */
    private $slide;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Upload", inversedBy="slideUploads")
     */
    private $upload;

    /**
     * @ORM\Column(type="float")
     */
    private $x1;

    /**
     * @ORM\Column(type="float")
     */
    private $y1;

    /**
     * @ORM\Column(type="float")
     */
    private $z1;

    /**
     * @ORM\Column(type="float")
     */
    private $x2;

    /**
     * @ORM\Column(type="float")
     */
    private $y2;

    /**
     * @ORM\Column(type="float")
     */
    private $z2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $timer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $kenburn_timer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlide(): ?Slide
    {
        return $this->slide;
    }

    public function setSlide(?Slide $slide): self
    {
        $this->slide = $slide;

        return $this;
    }

    public function getUpload(): ?Upload
    {
        return $this->upload;
    }

    public function setUpload(?Upload $upload): self
    {
        $this->upload = $upload;

        return $this;
    }

    public function getX1(): ?float
    {
        return $this->x1;
    }

    public function setX1(float $x1): self
    {
        $this->x1 = $x1;

        return $this;
    }

    public function getY1(): ?float
    {
        return $this->y1;
    }

    public function setY1(float $y1): self
    {
        $this->y1 = $y1;

        return $this;
    }

    public function getZ1(): ?float
    {
        return $this->z1;
    }

    public function setZ1(float $z1): self
    {
        $this->z1 = $z1;

        return $this;
    }

    public function getX2(): ?float
    {
        return $this->x2;
    }

    public function setX2(float $x2): self
    {
        $this->x2 = $x2;

        return $this;
    }

    public function getY2(): ?float
    {
        return $this->y2;
    }

    public function setY2(float $y2): self
    {
        $this->y2 = $y2;

        return $this;
    }

    public function getZ2(): ?float
    {
        return $this->z2;
    }

    public function setZ2(float $z2): self
    {
        $this->z2 = $z2;

        return $this;
    }

    public function getTimer(): ?int
    {
        return $this->timer;
    }

    public function setTimer(?int $timer): self
    {
        $this->timer = $timer;

        return $this;
    }

    public function getKenburnTimer(): ?int
    {
        return $this->kenburn_timer;
    }

    public function setKenburnTimer(?int $kenburn_timer): self
    {
        $this->kenburn_timer = $kenburn_timer;

        return $this;
    }
}
