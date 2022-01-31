<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(): Response
    {
        return new Response(content: '<h1>Main Page</h1>');
    }

    #[Route('/custom/{name?}', name: 'custom')]
    public function custom(Request $request) : Response
    {
        $name = ($request)->get('name');
        $content = '<p>Hello ' . $name .' ... </p>';

        return new Response(content: $content);
    }


}
