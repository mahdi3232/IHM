<?php

namespace Acme\ChampionatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MatcheType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('date')
                ->add('idJournee')
                ->add('idEquipe')
                ->add('idEquipe2')
                //->add('name', 'choice', array('choices' => array('F' => 'Féminin', 'M' => 'Masculin')))
                //->add('field', 'choice', array('data' => 'some_existing value' ))
                ->add('liste', 'entity', array(
                                    'class'    => 'AcmeChampionatBundle:Journee',
                                    'property' => 'libelle',
                                    'multiple' => false,
                                    'required' => true,
                                    'empty_value' => '-- sélectionner une journee --',
                                    'label'    => 'Choisir une journee  : ',
                                    ))
                
        ;
         $builder->add('listeJournne', 'choice', array(
            // Shows "Male" to the user, returns "m" when selected
            'choices' => array('testEval' => 'Test', 'Examen' => 'Examen','ds'=>'DS'),
            'multiple' => false,
            // before 2.7, this option didn't actually exist, but the
            // behavior was equivalent to setting this to false in 2.7.
                ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\ChampionatBundle\Entity\Matche'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'acme_championatbundle_matche';
    }

}
