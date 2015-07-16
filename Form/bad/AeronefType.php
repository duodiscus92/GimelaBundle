<?php

namespace DJET\GimelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AeronefType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('aeroDate', 	'date')
            ->add('aeroType', 	'text')
            ->add('aeroImmat', 	'text')
            ->add('aeroStatut', 'checkbox', array('required' => false))
            ->add('aeroEnvol',  'checkbox', array('required' => false))
            ->add('save', 	'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DJET\GimelaBundle\Entity\Aeronef'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'djet_gimelabundle_aeronef';
    }
}
