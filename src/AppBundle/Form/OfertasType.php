<?php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;


class OfertasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $timestamp = date('Y-d-m h:m:s');
        
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Título de la oferta'
            ))
            ->add('fechacreacion', HiddenType::class, array(
                'attr' => array("value" => $timestamp),
            ))
            ->add('fechaborrado', HiddenType::class)
            //->add('activo')
            ->add('tipo', null, array(
                    'label' => 'Tipo de contrato',
                    'required' => true
                ))
            ->add('fechainicio', DateType::class, array(
                'label' => 'Fecha inicio',
                'required' => false,
                'widget' => 'single_text',
                'html5' => false,
                'years' => range(date('Y'), date('Y')+1),
            ))
            ->add('title', null, array(
                'label' => 'Título'
                ))
            /*
            ->add('centro', EntityType::class, array(
                'class' => 'AppBundle:Centroestudios',
                'label' => 'Centro asociado',
                'choice_label' => 'nombre',
                'choice_value' => 'id',
                'expanded' => false,
                'multiple' => false,
                'placeholder' => 'Centro asociado',
                'attr' =>array('class' => '')
            ))
            */
            ->add('fechafin', DateType::class, array(
                'label' => 'Fecha fin',
                'widget' => 'single_text',
                'required' => false,
                'html5' => false,
                'years' => range(date('Y')+1, date('Y')+100),
            ))
            ->add('vacancies', null, array(
                'label' => 'Vacantes',
                'required' => true
            ))
            ->add('engagement', ChoiceType::class, array(
                'choices'  => array(
                    'Si' => true,
                    'No' => false,
                ),
                'label' => 'Contratación',
            ))
            ->add('closureReason', null, array(
                'label' => 'Motivo de cierre'
            ))
            ->add('closureExplanation', TextareaType::class,array(
                'label' => 'Comentario'
                ))

            ->add('descripcion', TextareaType::class, array(
                'label' => 'Descripción'
            ))
//            ->add('idempresa', EntityType::class, array(
//                'class' => 'AppBundle:Perfilempresa',
//                'choice_label' => 'nombreempresa',
//                'attr' =>array('class' => 'hidden')
//            ))
            
            
            ->add('categoria', EntityType::class, array(
                'class' => 'AppBundle:Categorias',
                'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->where('u.idpadre is NULL');
                    },
                'label' => 'Categoría',
                'choice_label' => 'nombre',
                'choice_value' => 'id',
                'expanded' => false,
                'multiple' => false,
                'required' => true,
                'placeholder' => 'Categoría profesional',
                'attr' =>array('class' => '')
            ));
            
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ofertas'
        ));
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_ofertas';
    }
}