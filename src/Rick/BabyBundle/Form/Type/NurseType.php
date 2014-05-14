<?php
/**
 * This file is part of symfony.
 * Author: louxin
 * Date: 14-5-14
 * Time: 22:26
 * File: NurseType.php
 */

namespace Rick\BabyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NurseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nurse_time', 'time', array(
                'label' => '时间'
            ))
            ->add('milliliter', 'text', array(
                'label' => '身长'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rick\BabyBundle\Entity\HistoryNurse',
        ));
    }

    public function getName()
    {
        return 'nurse';
    }
}
