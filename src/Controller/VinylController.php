<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route("/")]
    function homepage()
    {
        return new Response("Bonjour <strong>DSI 21</strong>");
    }

    #[Route("/browse/{slug}")]
    function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = "Genre: " . u(str_replace("-", " ", $slug))->title(true);
        } else {
            $title = "All genre";
        }

        return new Response($title);
    }
}
