<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IncomeController extends AbstractController
{
    #[Route('/income', name: 'app_income_add')]
    public function index(): Response
    {
        return $this->render('income/add.html.twig');
    }


}
