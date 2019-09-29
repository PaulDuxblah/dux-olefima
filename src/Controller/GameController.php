<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
    /**
     * @Route("/", name="game")
     */
    public function index()
    {
        return $this->render('game/index.html.twig');
    }
}
