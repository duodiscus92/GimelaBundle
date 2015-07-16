<?php

namespace DJET\GimelaBundle\Form\Aeronef;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GmlAeronefType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('aeroDate',		'date')
            ->add('aeroType',		'text')
            ->add('aeroImmat',		'text')
            ->add('aeroStatut', 	'checkbox', array('required' => false))
            ->add('aeroEnvol', 		'checkbox', array('required' => false))
            ->add('Créer',		'submit')
	    ->add('Annuler',		'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DJET\GimelaBundle\Entity\GmlAeronef'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'djet_gimelabundle_gmlaeronef';
    }
}
