<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class FormacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titulo', EntityType::class, array(
                    'class' => 'AppBundle:Formacion',
                    'label' => 'Título',
                    'choice_label' => 'titulo',
                    'choice_value' => 'id',
                    'group_by' => 'familiaprof',
                    'expanded' => false,
                    'multiple' => false,
                    'placeholder' => 'Título',
                    'attr' =>array('class' => '')
                ))
                // ->add('familiaprof', EntityType::class, array(
                //     'class' => 'AppBundle:Categorias',
                //     'label' => 'Categorias',
                //     'choice_label' => 'nombre',
                //     'choice_value' => 'id',
                //     'expanded' => false,
                //     'multiple' => false,
                //     'placeholder' => 'Categoría profesional',
                //     'attr' =>array('class' => '')
                // ))
                // ->add('subfamiliaprof', EntityType::class, array(
                //     'class' => 'AppBundle:Categorias',
                //     'label' => 'Categorias',
                //     'choice_label' => 'nombre',
                //     'choice_value' => 'id',
                //     'expanded' => false,
                //     'multiple' => false,
                //     'placeholder' => 'Subcategoría profesional',
                //     'attr' =>array('class' => '')
                // ))
                // ->add('creditos', null, array(
                //     'label' => 'Créditos'
                // ))
                // ->add('extinto', null, array(
                //     'label' => 'Extinto Si/No'
                // ))
                //->add('fechainicio')
                //->add('fechafin')
                //->add('fechacreacion', null, array(
                //    'label' => 'Fecha de inicio'
                //))
                //->add('fechaborrado')
                ->add('activo', null, array(
                    'label' => 'Activo Si/No'
                ))
                //->add('idcentro')
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Formacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_formacion';
    }


}
