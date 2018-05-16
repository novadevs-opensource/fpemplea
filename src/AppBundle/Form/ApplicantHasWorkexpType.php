<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ApplicantHasWorkexpType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('workexp', TextareaType::class, array(
                'label' => 'Descripción'
                ))
            ->add('start', DateType::class, array(
                'label' => 'Inicio',
                'widget' => 'single_text',
                'html5' => false,
                'years' => range(date('Y')-15, date('Y'))
                ))
            ->add('end', DateType::class, array(
                'label' => 'Fin',
                'widget' => 'single_text',
                'html5' => false,
                'years' => range(date('Y')-15, date('Y'))
                ))
            ->add('position', null, array(
                'label' => 'Puesto',
                ))
            ->add('applicant')
            ->add('otherCompany', HiddenType::class, array())
            ->add('company', EntityType::class, array(
                'class' => 'AppBundle:Perfilempresa',
                'label' => 'Empresa',
                'choice_label' => 'nombreempresa',
                'choice_value' => 'id',
                'expanded' => false,
                'multiple' => false,
                'attr' =>array('class' => '')
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ApplicantHasWorkexp'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_applicanthasworkexp';
    }

}