<?php
/**
 * This file is part of symfony.
 * Author: louxin
 * Date: 14-4-20
 * Time: 13:58
 * File: HistoryType.php
 */

namespace Rick\BabyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HistoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('weight', 'text', array(
                'label' => '体重'
            ))
            ->add('height', 'text', array(
                'label' => '身长'
            ))
            ->add('temperature_morning', 'text', array(
                'label' => '体温（早）'
            ))
            ->add('temperature_evening', 'text', array(
                'label' => '体温（晚）'
            ))
            ->add('is_bath', 'checkbox', array(
                'label' => '是否洗澡',
            ))
            ->add('is_stroke', 'checkbox', array(
                'label' => '是否抚触',
            ))
            ->add('nurses', 'collection', array(
                'label' => '喂奶',
                'allow_add' => true,
                'type' => new NurseType()
            ))
            ->add('stools', 'collection', array(
                'label' => '大便',
                'type' => new StoolType()
            ))
            ->add('submit', 'submit', array(
                'label' => '保存'
            ))
            ->add('reset', 'reset', array(
                'label' => '重置'
            ))
            ->setMethod('post')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rick\BabyBundle\Entity\History',
        ));
    }

    public function getName()
    {
        return 'history';
    }
}
