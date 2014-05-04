<?php
/**
 * This file is part of symfony.
 * Author: louxin
 * Date: 14-4-20
 * Time: 13:58
 * File: TextType.php
 */

namespace Rick\BabyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => '姓名'
            ))
            ->add('sex', 'choice', array(
                'label' => '性别',
                'choices' => array('1' => '男', '2' => '女'),
                'expanded' => true,
                'multiple' => false,
                'required' => true
            ))
            ->add('name_meaning', 'text', array(
                'label' => '寓意'
            ))
            ->add('name_generated_by', 'text', array(
                'label' => '由谁取得'
            ))
            ->add('nick_name', 'text', array(
                'label' => '乳名'
            ))
            ->add('nick_name_generated_by', 'text', array(
                'label' => '由谁取得'
            ))
            ->add('blood_type', 'choice', array(
                'label' => '血型',
                'choices' => array(
                    '1' => 'A',
                    '2' => 'B',
                    '3' => 'AB',
                    '4' => 'O'
                )
            ))
            ->add('height', 'text', array(
                'label' => '身长'
            ))
            ->add('weight', 'text', array(
                'label' => '体重'
            ))
            ->add('birthday', 'datetime', array(
                'label' => '公历出生时间',
                'with_seconds' => true,
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd HH:mm:ss'
            ))
            ->add('constellation', 'text', array(
                'label' => '星座'
            ))
            ->add('lunar_birthday', 'datetime', array(
                'label' => '农历出生时间',
                'with_seconds' => true,
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd HH:mm:ss'
            ))
            ->add('year_of_birth', 'text', array(
                'label' => '属相'
            ))
            ->add('age_of_dad', 'integer', array(
                'label' => '爸爸的年龄'
            ))
            ->add('age_of_mum', 'integer', array(
                'label' => '妈妈的年龄'
            ))
            ->add('hospital', 'text', array(
                'label' => '出生医院'
            ))
            ->add('picture', 'file', array(
                'label' => '照片'
            ))
            ->add('submit', 'submit', array(
                'label' => '保存'
            ))
            ->add('reset', 'reset', array(
                'label' => '重置'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rick\BabyBundle\Entity\Baby\Profile',
        ));
    }

    public function getName()
    {
        return 'profile';
    }
}
