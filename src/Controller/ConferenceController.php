<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'app_conference')]
    public function index(): Response
    {
        return new Response(<<<EOF
<html lang="en">
    <body>
        <h1>Conference say Hello!</h1>
        <img class="image" src="/images/conference.jpg" alt="Conference" width="600" height="400"/>"
    </body>
</html>
EOF
);
    }
}
