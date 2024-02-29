<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\AddIncomeFormType;
use App\Entity\Incomes;
use App\Entity\User;

use App\Entity\IncomesCategoryDefault;
use App\Entity\IncomesCategoryAssignedToUsers;
//use App\Repository\IncomesCategoryDefaultRepository;
//use App\Repository\IncomesCategoryAssignedToUsersRepository;


class AddIncomeController extends AbstractController
{

    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/income', name: 'app_income_add')]
    public function add(Request $request): Response
    {
        $this->assignDeafultIncomeCategoriesToUser();
        exit();

        $income = new Incomes();
        $form = $this->createForm(AddIncomeFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            echo($form->get('amount')->getData().'<br>');
            echo($form->get('category')->getData().'<br>');
            echo($form->get('income_comment')->getData().'<br>');
            var_dump($form->get('date_of_income')->getData());

          //  return $this->redirectToRoute('app_home');
        }

        return $this->render('income/add.html.twig', [
            'addIncomeForm' => $form->createView(),
        ]);
    }

    private function assignDeafultIncomeCategoriesToUser()
    {
        $incomesCategoryDefault = $this->entityManager->getRepository(IncomesCategoryDefault::class)->getAllIncomesCategoryDefault();
        
        if ($this->checkIfUserHasAssignedDeafultIncomeCategories() == true){
            echo ('User ma już kategorie');
        } else {
             /*29.02.2024 ---- TUTAJ ---- skończyłem
            - trzeba wyświetlić formularz Add Income form type - zrobione
            - trzeba skopiować income default do incomes usera
            - trzeba zrobić między tabelami zależności 
            - jakoś dodać przychód
            */
            echo ('User nie ma żadnych kategorii. Nastąpi przypisanie wartości defaultowych');
            echo('<pre>');
            var_dump($incomesCategoryDefault );
        }      
      //  return $this->getUser()->getId();
           
    }

    private function checkIfUserHasAssignedDeafultIncomeCategories(){
        $result = $this->entityManager->getRepository(IncomesCategoryAssignedToUsers::class)->findAll();
        return $result;
    }

}
