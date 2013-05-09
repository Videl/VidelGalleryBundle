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

    public function searchImageAction($var)
    {
    	$em = $this->getDoctrine()->getManager();
    	$entity = null;
    	if(is_numeric($var))
    	{
    		$entity = $em->getRepository('VidelGalleryBundle:Image')->findOneById($var);
    	} else
    		$entity = $em->getRepository('VidelGalleryBundle:Image')->findOneByName($var);

    		/*$entity = $em->getRepository('VidelGalleryBundle:Image')->find(11);*/


    	if (!$entity) {
            throw $this->createNotFoundException('Unable to find Image entity.');
        }

        return $this->render('VidelGalleryBundle:VidelGallery:oneimage.html.twig', array(
        	'image' => $entity
        	));
    }
}
