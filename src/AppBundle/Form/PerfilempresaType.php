<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Doctrine\ORM\EntityRepository;


class PerfilempresaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $timestamp = date('Y-d-m h:m:s');
        
        $builder
            ->add('nombreempresa', null, array(
                "label" => "Nombre de la empresa*"
            ))
            ->add('fechacreacion', HiddenType::class, array(
                'attr' => array("value" => $timestamp)
            ))
            ->add('sector', EntityType::class, array(
                'class' => 'AppBundle:Categorias',
                'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->where('u.idpadre is NULL');
                    },
                'label' => 'Sector Profesional*',
                'choice_label' => 'nombre',
                'choice_value' => 'id',
                'expanded' => false,
                'multiple' => false,
                // 'placeholder' => 'Sector profesional'
            ))
            ->add('trabajadores', null, array(
                "label" => "Nº de trabajadores"
            ))
            // ->add('cif', null, array(
            //     "label" => "CIF*"
            // ))
            ->add('description', null, array(
                'label' => 'Descripción*'
            ))
            ->add('telefono', null, array(
                "label" => "Teléfono*"
            ))
            ->add('direccion', null, array(
                "label" => "Dirección*"
            ))
            ->add('cp', null, array(
                "label" => "C.P."
            ))
            ->add('localidad', null, array(
                "label" => "Localidad"
            ))
            ->add('pais', null, array(
                "label" => "País"
            ))
            ->add('emailcontacto', null, array(
                "label" => "Email de contacto*"
            ))
            ->add('personacontacto', null, array(
                "label" => "Persona de contacto*"
            ))
            ->add('horariocontacto', null, array(
                "label" => "Horario de contacto*"
            ))
            //->add('fechaborrado')
            //->add('activo')
            ->add('fechamodificacion', HiddenType::class, array(
                'attr' => array("value" => $timestamp)
            ))
            ->add('web', null, array(
                "label" => "Sitio web"
            ));
            // ->add('imagen', FileType::class, array(
            //     "label" => "Imagen:*",
            //     "attr" =>array("class" => "form-control"),
            //     "data_class" => null,
            //     'required' => false
            // ));
            // ->add('idusuario');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Perfilempresa'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_perfilempresa';
    }


}
