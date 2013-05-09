<?php

namespace Videl\VidelGalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImageController extends Controller
{

    public function uploadAction()
    {
        $document = new Document();
        $form = $this->createFormBuilder($document)
            ->add('name')
            ->add('file')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($document);
                $em->flush();

                return $this->redirect($this->generateUrl(...));
            }
        }

        return array('form' => $form->createView());
    }
}