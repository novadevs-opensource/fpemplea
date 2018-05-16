<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Doctrine\ORM\EntityRepository;

class ApplicantHasSkillType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('applicant')
            ->add('skill', EntityType::class, array(
                'class' => 'AppBundle:Skill',
                'label' => 'Competencia Técnica',
                'group_by' => 'category',
                'choice_label' => 'skill',
                'choice_value' => 'id',
                'expanded' => false,
                'multiple' => false,
                'attr' =>array('class' => '')
            ));
            // ->add('skill', EntityType::class, array(
            //     'class' => 'AppBundle:Skill',
            //     'label' => 'Competencia Técnica',
            //     'group_by' => => function($val, $key, $index) {
            //                         if ($val <= new \DateTime('+3 days')) {
            //                             return 'Soon';
            //                         } else {
            //                             return 'Later';
            //                         }
            //                     },
            //     'choice_label' => 'skill',
            //     'choice_value' => 'id',
            //     'expanded' => false,
            //     'multiple' => false,
            //     'attr' =>array('class' => '')
            // ));
            // ->add('skill', EntityType::class, array(
            //     'class' => 'AppBundle:Skill',
            //     'label' => 'Competencia Personal',
            //     'choice_label' => 'category',
            //     'query_builder' => function (EntityRepository $er) {
            //             return $er->createQueryBuilder('u')
            //                 ->where('u.skillCategory = 2');
            //         },
            //     'choice_label' => 'skill',
            //     'choice_value' => 'id',
            //     'expanded' => false,
            //     'multiple' => false,
            //     'attr' =>array('class' => '')
            // ));
    }
    
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ApplicantHasSkill'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_applicanthasskill';
    }


}
