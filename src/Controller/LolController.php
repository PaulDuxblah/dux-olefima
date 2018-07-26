<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LolController extends GameController
{
    /**
     * @Route("/lol", name="lol")
     */
    public function index()
    {
        return $this->render('game/lol/index.html.twig');
    }

    /**
     * @Route("/lol/champions", name="lolChampions")
     */
    public function champions()
    {
        $files = scandir(__DIR__ . '/../../templates/game/lol/champions');
        $items = [];
        foreach ($files as $key => $file) {
            if ($file === '.' || $file === '..' || $file === 'base.html.twig') continue;
            $items[] = static::getChampionNavItem(explode('.', $file)[0]);
        }

        return $this->render('game/lol/champions.html.twig', [
            'items' => $items
        ]);
    }

    /**
     * @Route("/lol/champions/{name}", name="lolChampion")
     */
    public function champion($name)
    {
        return $this->render('game/lol/champions/' . $name . '.html.twig');
    }

    public static function getChampionNavItem($name)
    {
        return [
            'title' => $name,
            'path' => '/lol/champions/' . $name,
            'image' => 'lol/champions/' . $name . '.jpg'
        ];
    }
}
