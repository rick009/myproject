<?php

namespace Rick\BabyBundle\Controller;

use Rick\BabyBundle\Entity\Baby\Profile;
use Rick\BabyBundle\Form\Type\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

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
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function profileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('RickBabyBundle:Baby\Profile')->find(1);
        $form = $this->createForm(new ProfileType(), $profile);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $profile = $form->getData();
            print_r($profile);
            $profile->upload();
            $em->persist($profile);
            $em->flush();
        }

        return $this->render('RickBabyBundle:Baby:profile.html.twig', array(
            'form' => $form->createView(),
            'profile' => $profile
        ));
    }
}
