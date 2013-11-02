<?php

namespace Svk\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\JsonResponse;

use Svk\WelcomeBundle\Entity\Subscriber;

class WelcomeController extends Controller
{
    public function indexAction()
    {
    	$subscribers = $this->getDoctrine()->getRepository('SvkWelcomeBundle:Subscriber')->findAll();
    	$count = 32;
        return $this->render('SvkWelcomeBundle::index.html.twig', array('count' => $count));
    }

    public function subscribeAction(Request $request)
    {
    	// just setup a fresh $task object (remove the dummy data)
	    $subscriber = new Subscriber();

	    $form = $this->createFormBuilder($subscriber)
	        ->add('firstname', 'text')
	        ->add('lastname', 'text')
	        ->add('email', 'email')
	        ->add('birthday', 'date')
	        ->add('Subscribe', 'submit')
	        ->getForm();

	    $form->handleRequest($request);

	    if ($form->isValid()) {
	        // fait quelque chose comme sauvegarder la tâche dans la bdd
	        $em = $this->getDoctrine()->getManager();
		    $em->persist($subscriber);
		    $em->flush();
		    
	        return $this->redirect($this->generateUrl('svk_welcome_homepage'));
	    }

    	return $this->render('SvkWelcomeBundle::subscriptionForm.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
