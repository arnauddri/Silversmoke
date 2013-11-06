<?php

namespace Svk\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\JsonResponse;

use Svk\WelcomeBundle\Entity\Subscriber;

class WelcomeController extends Controller
{
    private function count()
    {
        $subscribers = $this->getDoctrine()->getRepository('SvkWelcomeBundle:Subscriber')->findAll();
        return count($subscribers);
    }

    public function indexAction()
    {
        return $this->render('SvkWelcomeBundle::index.html.twig', array('count' => $this->count()));
    }

    public function subscribeAction(Request $request)
    {
    	// just setup a fresh $task object (remove the dummy data)
	    $subscriber = new Subscriber();
	    $subscriber->setRegistration(new \Datetime('now'));
	    $subscriber->setBirthday(new \Datetime('today'));
	    $subscriber->setCountry('somewhere');

	    $form = $this->createFormBuilder($subscriber)
	        ->add('firstname', 'text')
	        ->add('lastname', 'text')
	        ->add('email', 'email')
	        ->add('birthday', 'date', array(
                        'widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => array('class' => 'date')))
	        ->getForm();

	    if ($request->isMethod('POST')) {
            
            $form->bind($request);

            if ($form->isValid()) { 
		        // fait quelque chose comme sauvegarder la tâche dans la bdd

		        $em = $this->getDoctrine()->getManager();
			    $em->persist($subscriber);
			    $em->flush();

                $mailer = $this->get('mailer');
                $message = \Swift_Message::newInstance();
                $message->setSubject('Thank you for registering to Silversmoke')
                        ->setFrom(array('jessica@getsilversmoke.com' => 'Jessica from Silversmoke'))
                        ->setTo($subscriber->getEmail())
                        ->setContentType('text/html')
                        ->setBody($this->renderView('SvkWelcomeBundle:Subscribe:subscription.email.twig', array('name' => $subscriber->getFirstname())))
                ;
                $mailer->send($message);


		        return $this->redirect($this->generateUrl('svk_welcome_subscribed'));
		    }
	    }

    	return $this->render('SvkWelcomeBundle:Subscribe:form.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function successAction()
    {
    	return $this->render('SvkWelcomeBundle:Subscribe:success.html.twig', array('count' => $this->count()));
    }

    public function aboutAction()
    {
        return $this->render('SvkWelcomeBundle:Footer:about.html.twig', array('count' => $this->count()));   
    }

    public function faqAction()
    {
        return $this->render('SvkWelcomeBundle:Footer:faq.html.twig', array('count' => $this->count()));   
    }

    public function contactAction()
    {
        return $this->render('SvkWelcomeBundle:Footer:contact.html.twig', array('count' => $this->count()));   
    }
}
