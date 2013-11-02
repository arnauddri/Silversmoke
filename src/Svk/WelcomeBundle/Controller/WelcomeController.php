<?php

namespace Svk\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\JsonResponse;

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
    	$data = $request->request->all();

    	return new JsonResponse($data);

    	return $this->redirect($this->generateUrl('svk_welcome_homepage'));
    }
}
