<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Validator\Constraints\IsTrue;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class PerfilestudianteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('imagen', FileType::class, array(
            //     "label" => "Imagen:*",
            //     "attr" =>array("class" => "form-control"),
            //     "data_class" => null,
            //     'required' => false
            // ))
        
            ->add('nombre', null, array(
                'label' => 'Nombre*'
            ))
            ->add('apellidos', null, array(
                'label' => 'Apellidos*'
            ))
            // ->add('dni', null, array(
            //     'label' => 'DNI*'
            // ))
            ->add('email', null, array(
                'label' => 'eMail*'
            ))
            ->add('telefonouno', null, array(
                'label' => 'Tlf. Móvil'
            ))
            ->add('telefonodos', null, array(
                'label' => 'Tlf. fijo'
            ))
            ->add('direccion', null, array(
                'label' => 'Dirección'
            ))
            ->add('cp', null, array(
                'label' => 'C.P.'
            ))
            ->add('localidad', null, array(
                'label' => 'Localidad'
            ))
            ->add('pais', null, array(
                'label' => 'País'
            ))
            ->add('diponibilidad', DateType::class, array(
                'label' => 'Disponibilidad*',
                'widget' => 'single_text',
                'html5' => false,
                // 'years' => range(date('Y-m-d'), date('Y')+1),
            ))
            ->add('fechanacimiento', DateType::class, array(
                'label' => 'Fecha de nacimiento*',
                'widget' => 'single_text',
                'html5' => false,
                // 'years' => range(date('Y')-70, date('Y')-18),
            ))
            ->add('intereses', null, array(
                'label' => 'Intereses'
            ))/*
            ->add('cvpdf', FileType::class, array(
                "label" => "C.V. formato .pdf",
                "attr" =>array("class" => "form-control"),
            ))*/
            ->add('cvtxt', null, array(
                'label' => 'C.V. En texto plano'
            ))
            ->add('fexibilidadgeografica', CheckboxType::class, array(
                'required' => false,
                'label' => 'Movilidad',
            ));
            //->add('idusuario');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Perfilestudiante'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_perfilestudiante';
    }


}
