<?php

namespace Videl\VidelGalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VidelGalleryBundle:Default:index.html.twig', array('name' => $name));
    }
}
