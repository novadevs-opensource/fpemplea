<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class CentroestudiosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $timestamp = date('Y-d-m h:m:s');
        
        $builder
            ->add('nombre', null, array(
                'label' => 'Nombre *'
            ))
            ->add('cif', null, array(
                'label' => 'C.I.F. *'
            ))
            // ->add('familiaprof', EntityType::class, array(
            //     'class' => 'AppBundle:Categorias',
            //     'label' => 'Categoría Profesional',
            //     'choice_label' => 'nombre',
            //     'query_builder' => function (EntityRepository $er) {
            //             return $er->createQueryBuilder('u')
            //                 ->where('u.idpadre is NULL');
            //         },
            //     'choice_value' => 'id',
            //     'expanded' => false,
            //     'multiple' => false,
            //     'placeholder' => false,
            //     'required' => false,
            //     'attr' =>array('class' => '')
            // ))
            // ->add('subfamiliaprof', EntityType::class, array(
            //     'class' => 'AppBundle:Categorias',
            //     'label' => 'Categoría Profesional 2',
            //     'choice_label' => 'nombre',
            //     'choice_value' => 'id',
            //     'query_builder' => function (EntityRepository $er) {
            //             return $er->createQueryBuilder('u')
            //                 ->where('u.idpadre is not NULL');
            //         },
            //     'group_by' => 'idpadre',
            //     'expanded' => false,
            //     'multiple' => false,
            //     'placeholder' => 'Subcategoría profesional',
            //     'required' => false,
            //     'attr' =>array('class' => '')
            // ))
            ->add('telefono', null, array(
                'label' => 'Teléfono principal*'
            ))
            ->add('direccion', null, array(
                'label' => 'Dirección *'
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
            ->add('email', null, array(
                'label' => 'eMail *'
            ))
            ->add('fechacreacion', HiddenType::class, array(
                'attr' => array("value" => $timestamp)
            ))
            //->add('fechaborrado')
            //->add('activo')
            ->add('web', UrlType::class, array(
                'label' => 'Sitio web *',
                'attr' => array('placeholder' => 'http://www.website.com'),
            ));
            // ->add('imagen', FileType::class, array(
            //     "label" => "Imagen: *",
            //     "attr" =>array("class" => "form-control"),
            //     "data_class" => null,
            //     'required' => false
            // ));
            //->add('idusuario');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Centroestudios'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_centroestudios';
    }


}
