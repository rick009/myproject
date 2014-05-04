<?php

namespace Rick\TestBundle\Controller;

use Rick\TestBundle\Entity\Post;
use Rick\TestBundle\Form\Type\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $post = new Post();
        $post->setName('娄鑫');
        $post->setAge(30);
        $post->setCity('北京');
        $post->setCountry('中国');

        $formType = $this->get('rick.test.form.type.post');

        $form = $this->createForm($formType, $post);

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirect($this->generateUrl('rick_test_success'));
        }

        return $this->render('RickTestBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function successAction()
    {
        return $this->render('RickTestBundle:Default:success.html.twig');
    }
}
