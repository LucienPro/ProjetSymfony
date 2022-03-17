<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/general", name="app_general")
     */
    public function index(): Response
    {
        return $this->render('general/index.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }

    /**
    * @Route("/addiction", name="addiction")
    */
    public function addiction() {
        return $this->render('general/addiction.html.twig');
    }
    
    /**
    * @Route("/alimentation", name="alimentation")
    */
    public function alimentation() {
        return $this->render('general/alimentation.html.twig');
    }

    /**
    * @Route("/traumatologie", name="traumatologie")
    */
    public function traumatologie() {
        return $this->render('general/traumatologie.html.twig');
    }

    /**
    * @Route("/contact", name="contact")
    */
    public function contact() {
        return $this->render('general/contact.html.twig');
    }
}
