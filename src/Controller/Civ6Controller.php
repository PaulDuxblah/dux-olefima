<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Civ6Controller extends Controller
{
    /**
     * @Route("/civ6", name="civ6")
     */
    public function index()
    {
        return $this->render('civ6/index.html.twig');
    }
}
