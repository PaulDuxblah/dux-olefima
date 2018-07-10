<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LolController extends Controller
{
    /**
     * @Route("/lol", name="lol")
     */
    public function index()
    {
        return $this->render('lol/index.html.twig');
    }

    /**
     * @Route("/lol/champions/{name}", name="lolChampion")
     */
    public function champions($name)
    {
        return $this->render('lol/champions/' . $name . '.html.twig');
    }
}
