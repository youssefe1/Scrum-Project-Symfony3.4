<?php

namespace EntitiesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TacheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idSprint')
            ->add('dateDebutTache')
            ->add('dateFinTache')
            ->add('nomTache')
            ->add('typeTache')
            ->add('listePersonnel')
            ->add('descriptionTache')
            ->add('listeNbreHeure')
            ->add('moyenneEstimation')
            ->add('etat')
            ->add('ideUserStoryBs')
            ->add('user')
            ->add('save',SubmitType::class);

        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntitiesBundle\Entity\Tache'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entitiesbundle_tache';
    }


}
