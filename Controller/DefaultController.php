<?php

namespace Videl\VidelGalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('VidelGalleryBundle:Image')->findAll();

        return $this->render('VidelGalleryBundle:Default:index.html.twig', array('images' => $entities));
    }
}
