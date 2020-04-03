<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OnePageController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('one_page/index.html.twig', [
            'title' => "index",
        ]);
    }

    /**
     * @Route("/qui", name="qui")
     */

    public function qui()
    {
        return $this->render('one_page/qui.html.twig', [
            'title' => "qui",
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */

    public function contact()
    {
        return $this->render('one_page/contact.html.twig', [
            'title' => "contact",
        ]);
    }
}
