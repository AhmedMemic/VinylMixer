<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController 
{
    #[Route('/')]
    public function homepage() : Response
    {
        return new Response("Title of the homepage"); 
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = NULL) : Response
    {
        if ($slug) {
            $title = "Genre: " . str_replace('-', " ", $slug);
        } else {
            $title = "All Genres";
        }

        return new Response($title);
    }
}