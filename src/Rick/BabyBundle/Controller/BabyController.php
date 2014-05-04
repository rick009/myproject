<?php

namespace Rick\BabyBundle\Controller;

use Rick\BabyBundle\Entity\Baby\Profile;
use Rick\BabyBundle\Form\Type\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BabyController extends Controller
{
    public function indexAction()
    {
        return $this->render('RickBabyBundle:Baby:index.html.twig');
    }

    public function newAction()
    {
        return $this->render('RickBabyBundle:Baby:new.html.twig');
    }

    /**
     * 宝宝档案
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function profileAction()
    {
        $profile = new Profile();
        $profile->setBirthday(new \DateTime());
        $profile->setSex('1');

        $form = $this->createForm(new ProfileType(), $profile);
        return $this->render('RickBabyBundle:Baby:profile.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
