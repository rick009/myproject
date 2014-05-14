<?php

namespace Rick\BabyBundle\Controller;

use Rick\BabyBundle\Form\Type\ProfileType;
use Rick\BabyBundle\Form\Type\HistoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BabyController extends Controller
{
    public function indexAction()
    {
        return $this->render('RickBabyBundle:Baby:index.html.twig');
    }

    /**
     * 妈妈新建记录
     *
     * @return Response
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        /** @var \Rick\BabyBundle\Entity\Baby\Profile $profile */
        $profile = $em->getRepository('RickBabyBundle:Baby\Profile')->find(1);
        $birthday = $profile->getBirthday()->format('Y-m-d');
        $today = new \DateTime('now');
        $days = $today->diff($profile->getBirthday())->format('%a');

        $form = $this->createForm(new HistoryType());

        return $this->render('RickBabyBundle:Baby:new.html.twig', array(
            'form' => $form->createView(),
            'birthday' => $birthday,
            'days' => $days
        ));
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
            $profile->upload();
            $em->persist($profile);
            $em->flush();
        }

        return $this->render('RickBabyBundle:Baby:profile.html.twig', array(
            'form' => $form->createView(),
            'profile' => $profile
        ));
    }

    public function historyAction()
    {
        return new Response();
        //return $this->render('RickBabyBundle:Baby:profile.html.twig');
    }
}
