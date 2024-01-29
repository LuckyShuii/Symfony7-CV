<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    #[Route('/', name: 'app_cv')]
    public function index(): Response
    {
        // accède à /config, récup le chemin absolu du projet
        $projectDir = $this->getParameter('kernel.project_dir');

        // file_get_contents fonctionnalité de base de symfony qui permet de récupérer le contenu d'un fichier
        $json = file_get_contents($projectDir . '/import/cv.json');

        $cv = json_decode($json, true);

        return $this->render('cv/index.html.twig', [
            'cv' => $cv,
        ]);
    }
}
