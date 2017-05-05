<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render("home/index.html.twig");
    }

    /**
     * @Route("\bootstrap", name="bootstrap")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showBootsrtapOptions()
    {
        return $this->render("home/bootstrap.html.twig");
    }
}
