<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RandomController extends AbstractController
{
    #[Route('/random', 'random')]
    public function random()
    {
        return $this->render('base.html.twig');
    }
}