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
     * @Route("/lol/champions", name="lolChampions")
     */
    public function champions()
    {
        $files = scandir(__DIR__ . '/../../templates/lol/champions');
        $names = [];
        foreach ($files as $key => $file) {
            if ($file === '.' || $file === '..' || $file === 'base.html.twig') continue;
            $names[] = explode('.', $file)[0];
        }

        return $this->render('lol/champions.html.twig', [
            'names' => $names
        ]);
    }

    /**
     * @Route("/lol/champions/{name}", name="lolChampion")
     */
    public function champion($name)
    {
        return $this->render('lol/champions/' . $name . '.html.twig');
    }
}
