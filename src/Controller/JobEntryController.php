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
        return $this->render('job_entry/index.html.twig', []);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about/index.html.twig', []);
    }

    #[Route('/category', name: 'app_category')]
    public function category(): Response 
    {
        return $this->render(('pages/category.html.twig'));
    }

    #[Route('/testimonials', name: 'app_testimonials')]
    public function testimonials(): Response
    {
        return $this->render('pages/testimonials.html.twig');
    }

    #[Route('/job-detail', name: 'app_job-detail')]
    public function jobDetail(): Response
    {
        return $this->render('job/job-detail.html.twig');
    }

    #[Route('/job-list', name: 'app_job-list')]
    public function jobList(): Response
    {
        return $this->render('job/job-list.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact/index.html.twig', []);
    }


    
}
