<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

//use Symfony\Component\Form\FormEvents;
//use Symfony\Component\Form\FormEvent;

//use AppBundle\Entity\FormacionHasCentroestudios;
use Doctrine\ORM\EntityRepository;


class PerfilestudianteHasFormacionType extends AbstractType 
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('finished', CheckboxType::class, array(
                'label' => 'Finalizado Si/No',
                'required' => false
            ))
            ->add('start', DateType::class, array(
                    'label' => 'Inicio',
                    'widget' => 'single_text',
                    'html5' => false,
                    'years' => range(date('Y')-10, date('Y')),
            ))
            ->add('end', DateType::class, array(
                    'label' => 'Fin',
                    'widget' => 'single_text',
                    'html5' => false,
                    'years' => range(date('Y')-10, date('Y')),
            ))
            ->add('formacion', EntityType::class, array(
                'class' => 'AppBundle:Formacion',
                'label' => 'Título formativo',
                'group_by' => 'familiaprof',
                'choice_label' => 'titulo',
                'choice_value' => 'id',
                'expanded' => false,
                'multiple' => false,
                'placeholder' => 'Estudios',
                'attr' =>array('class' => '')
            ))
            // TODO: No definitivo
            ->add('school', EntityType::class, array(
                'class' => 'AppBundle:Centroestudios',
                'label' => 'Centro de estudios',
                'choice_label' => 'nombre',
                'choice_value' => 'id',
                'expanded' => false,
                'multiple' => false,
                'placeholder' => 'Centro',
                'attr' =>array('class' => '')
            ));
            

/* TODO:
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event){
                $form = $event->getForm();

                $formOptions = array(
                    'class'         => FormacionHasCentroestudios::class,
                    'choice_label'  => 'centroestudios',
                    'query_builder' => function (EntityRepository $er){
                        // build a custom query
                        return $er->createQueryBuilder('u');

                        // or call a method on your repository that returns the query builder
                        // the $er is an instance of your UserRepository
                        // return $er->createOrderByFullNameQueryBuilder();
                    },
                );

                // create the field, this is similar the $builder->add()
                // field name, field type, data, options
                $form->add('school', EntityType::class, $formOptions);
            }
        );
    */
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\PerfilestudianteHasFormacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_perfilestudiantehasformacion';
    }


}
