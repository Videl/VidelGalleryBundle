<?php

namespace Videl\VidelGalleryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gallery
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Videl\VidelGalleryBundle\Entity\GalleryRepository")
 */
class Gallery
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="images")
     */
    protected $images;

    /**
     *  @ORM\Column(name="images_text", type="text", nullable=true)
     *
     */
    private $images_shortcut;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Gallery
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Gallery
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set images_shortcut
     *
     * @param string $imagesShortcut
     * @return Gallery
     */
    public function setImagesShortcut($imagesShortcut)
    {
        $this->images_shortcut = $imagesShortcut;
    
        return $this;
    }

    /**
     * Get images_shortcut
     *
     * @return string 
     */
    public function getImagesShortcut()
    {
        return $this->images_shortcut;
    }

    /**
     * Add images
     *
     * @param \Videl\VidelGalleryBundle\Entity\Image $images
     * @return Gallery
     */
    public function addImage(\Videl\VidelGalleryBundle\Entity\Image $images)
    {
        $this->images[] = $images;
    
        return $this;
    }

    /**
     * Remove images
     *
     * @param \Videl\VidelGalleryBundle\Entity\Image $images
     */
    public function removeImage(\Videl\VidelGalleryBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }
}