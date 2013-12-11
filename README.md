VidelGalleryBundle
==================

VidelGalleryBundle for Symfony. This bundle aims to help you manage galleries of images. You can upload images, then you can choose to create galleries with a selection of your images.

Requirements
------------

  1. Symfony 2.1 (probably 2.2 too, but I didn't check)
  2. That's all.

Install
-------
To install, pull the Bundle into a ``VidelGalleryBundle`` folder, then add the following into AppKernel.php :

    new Videl\VidelGalleryBundle\VidelGalleryBundle(),
    
Correct the path name if you want to choose stuff, but by default, it should be that. Then, you need to add the routing .yml file of the bundle into ``routing.yml`` :

    videl_gallery:
    resource: "@VidelGalleryBundle/Resources/config/routing.yml"
    prefix:   /gallery
    
Once again, you are free to change anything, but be consistent in your changes. With the prefix ``/gallery``, you will be able to access the bundle with ``http://example.com/web/app_dev.php/gallery``.
Please watch the files ``routing.yml``, ``images.yml``, and ``gallery.yml``, as they will be very useful. Especially, the ``images.yml``, and ``gallery.yml`` contains the routes for the corresponding CRUDs.
Also, at line 117 of **entity Image**, (``Videl\VidelGalleryBundle\Entity\Image``), please change the link to your upload folder (you have to **create it** and chmod it to write for apache daemon).
My upload folder, as stated at line 135, is ``uploads/images`` under ``web``. 

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : 'http://example.com/web/'.$this->getUploadDir().'/'.$this->path;
    }
    
If unclear, you can of course send questions :).

Improvements
============

If you have any idea, feel free to code it/send me the idea.
