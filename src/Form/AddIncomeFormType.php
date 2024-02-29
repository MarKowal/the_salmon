<?php

namespace App\Form;

use App\Entity\Incomes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AddIncomeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
          //  ->add('user_id')
          //  ->add('income_category_assigned_to_user_id')
            ->add('amount')
            ->add('date_of_income', DateType::class)
            ->add('category', TextType::class, ['mapped' => false])
            ->add('income_comment', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Incomes::class,
        ]);
    }
}
