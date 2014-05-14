<?php
/**
 * This file is part of symfony.
 * Author: louxin
 * Date: 14-5-14
 * Time: 22:29
 * File: StoolType.php
 */

namespace Rick\BabyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StoolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('stool_time', 'time', array(
                'label' => '时间'
            ))
            ->add('color', 'text', array(
                'label' => '颜色'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rick\BabyBundle\Entity\HistoryStool',
        ));
    }

    public function getName()
    {
        return 'stool';
    }
}
