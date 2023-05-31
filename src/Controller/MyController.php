<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    #[Route('/hello/{name}', name: 'hello')]
    public function hello($name = NULL) : Response
    {
        return $this->render('vinyl/hello.html.twig', [
            'name' => $name,
            'surname' => 'Memic'
        ]);
    }
}