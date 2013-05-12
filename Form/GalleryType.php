<?php

namespace Videl\VidelGalleryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GalleryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('images', 'entity', array(
                'class' => 'VidelGalleryBundle:Image',
                'multiple' => 'true',
                'expanded' => 'true',
                'property' => 'WebPath'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Videl\VidelGalleryBundle\Entity\Gallery'
        ));
    }

    public function getName()
    {
        return 'videl_videlgallerybundle_gallerytype';
    }
}
