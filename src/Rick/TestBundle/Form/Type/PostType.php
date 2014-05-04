<?php

namespace Rick\TestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('icon' => 'glyphicon glyphicon-user'))
            ->add('age', 'choice', array(
                'empty_value' => '请选择年龄',
                'choices' => array(
                    '20' => 20,
                    '30' => 30,
                    '40' => 40
                ),
                'preferred_choices' => array('40')
            ))
            ->add('country', 'text', array('icon' => 'glyphicon glyphicon-user'))
            ->add('city', 'search')
            ->add('save', 'submit')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rick\TestBundle\Entity\Post',
        ));
    }

    public function getName()
    {
        return 'post';
    }
}