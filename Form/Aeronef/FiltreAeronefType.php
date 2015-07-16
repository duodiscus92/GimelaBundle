<?php

namespace DJET\GimelaBundle\Form\Aeronef;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FiltreAeronefType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Remorqueur', 	'checkbox', array('required' => false, 'data' => true))
            ->add('Planeur', 		'checkbox', array('required' => false, 'data' => true))
            ->add('Filtrer',		'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DJET\GimelaBundle\Entity\FiltreAeronef'
        ));
    }

    /**
     * @return string
     *
    */
    public function getName()
    {
        return 'djet_gimelabundle_filtre_aeronef';
    }

}
