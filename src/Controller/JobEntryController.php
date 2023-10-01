<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class JobEntryController extends AbstractController
{
    #[Route('/', name: 'app_job_entry')]
    public function index(): Response
    {
        return $this->render('job_entry/index.html.twig' , ['controller_name' => 'JobEntryController', 
        ]);
    }
}