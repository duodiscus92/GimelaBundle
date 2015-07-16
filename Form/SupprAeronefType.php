<?php

namespace DJET\GimelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SupprAeronefType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Supprimer',		'submit')
            ->add('Annuler',		'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DJET\GimelaBundle\Entity\SupprAeronef'
        ));
    }

    /**
     * @return string
     *
    */
    public function getName()
    {
        return 'djet_gimelabundle_suppr_aeronef';
    }

}
