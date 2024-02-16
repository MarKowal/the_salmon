<?php

namespace App\Entity;

use App\Repository\IncomesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IncomesRepository::class)]
class Incomes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?int $income_category_assigned_to_user_id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $amount = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_of_income = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $income_comment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getIncomeCategoryAssignedToUserId(): ?int
    {
        return $this->income_category_assigned_to_user_id;
    }

    public function setIncomeCategoryAssignedToUserId(int $income_category_assigned_to_user_id): static
    {
        $this->income_category_assigned_to_user_id = $income_category_assigned_to_user_id;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDateOfIncome(): ?\DateTimeInterface
    {
        return $this->date_of_income;
    }

    public function setDateOfIncome(\DateTimeInterface $date_of_income): static
    {
        $this->date_of_income = $date_of_income;

        return $this;
    }

    public function getIncomeComment(): ?string
    {
        return $this->income_comment;
    }

    public function setIncomeComment(?string $income_comment): static
    {
        $this->income_comment = $income_comment;

        return $this;
    }
}
