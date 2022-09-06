<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/luckynumber", name="app_lucky_number")
     */
    public function number(): Response
    {
        return $this->render("/lucky/number.html.twig", [
            'number' => random_int(0, 100)
        ]);
    }

    #[Route("randomnumber")]
    public function random(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            "<html>
                <h1>Votre numéro aléatoire: $number</h1>
            </html>"
        );
    }
}
