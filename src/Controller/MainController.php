<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route('/custom/{name?}', name: 'custom')]
    public function custom(Request $request) : Response
    {
        $name = ($request)->get('name');

        return $this->render('main/custom.html.twig', [
            'name' => $name
        ]);
    }


}
