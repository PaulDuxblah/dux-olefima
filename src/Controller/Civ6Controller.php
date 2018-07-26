<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Civ6Controller extends GameController
{
    /**
     * @Route("/civ6", name="civ6")
     */
    public function index()
    {
        return $this->render('game/civ6/index.html.twig');
    }

    /**
     * @Route("/civ6/leaders", name="civ6Leaders")
     */
    public function leaders()
    {
        $files = scandir(__DIR__ . '/../../templates/game/civ6/leaders');
        $names = [];
        foreach ($files as $key => $file) {
            if ($file === '.' || $file === '..' || $file === 'base.html.twig') continue;
            $names[] = explode('.', $file)[0];
        }

        return $this->render('game/civ6/leaders.html.twig', [
            'names' => $names
        ]);
    }

    /**
     * @Route("/civ6/leaders/{name}", name="civ6Leader")
     */
    public function leader($name)
    {
        return $this->render('game/civ6/leaders/' . $name . '.html.twig');
    }
}
