<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    /**
     * @Route("/", name="game")
     */
    public function index()
    {
        return $this->render('game/index.html.twig');
    }
}