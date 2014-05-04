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
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TextType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'label' => '输入框',
            'label_attr' => array(
                'class' => 'control-label',
            )
        ));
    }

    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'custom_text';
    }
}