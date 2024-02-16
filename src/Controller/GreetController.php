<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GreetController extends AbstractController
{
    #[Route('/greet/{name?}', name: 'app_greet')]
    public function index(Request $request): Response
    {
        $name = $request->get('name');

        $greet = empty($name) ? "Hello whoever you are!" : sprintf("Hello %s!", $name);

        return new Response(<<<EOF
            <html>
                $greet
            </html>
            EOF
        );
    }
}
