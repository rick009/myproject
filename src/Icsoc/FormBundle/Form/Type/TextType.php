<?php
/**
 * This file is part of symfony.
 * Author: louxin
 * Date: 14-4-20
 * Time: 13:58
 * File: TextType.php
 */

namespace Icsoc\FormBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InputType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('age', 'integer')
            ->add('country', 'text')
            ->add('city', 'text')
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