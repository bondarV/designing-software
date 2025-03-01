<?php
namespace Employees;

use Utilities\WorkHourValidator;

class Veterinarian extends Employee
{
    const STAKE_PER_HOUR = 20;
    const ROLE = 'Veterinarian';
    protected int $curedAnimals = 0;

    public function __construct(
        protected string $name,
        protected int $age,
        protected string $gender,
        protected float|int|null $experienceYears = null,
        int $curedAnimals = 0
    ) {
        parent::__construct($name, $age, $gender, $experienceYears, self::ROLE);
        $this->curedAnimals = $curedAnimals;
    }

    public function calculateSalary(int|float $finalMonthWorkHours): int|float
    {
        WorkHourValidator::validate($finalMonthWorkHours);
        return $this->calculateSalaryForMonth($finalMonthWorkHours);
    }

    private function calculateSalaryForMonth(int|float $finalMonthWorkHours): int|float
    {
        return $finalMonthWorkHours * self::STAKE_PER_HOUR + (($this->curedAnimals * 250) / 100);
    }

    public function doWork(): void
    {
        $this->TargetsVeterinarianInfoDisplay();
    }

    private function TargetsVeterinarianInfoDisplay(): void
    {
        echo "$this->name, the veterinarian, is examining animals today.\n";
        echo "$this->name is performing a check-up on a zebra.\n";
        echo "$this->name is administering treatment to an injured animal.\n";
    }

    public function increaseCuredAnimals(int $count): void
    {
        $this->curedAnimals += $count;
        echo "$this->name has now cured $this->curedAnimals animals.\n";
    }

    public function getCuredAnimalsCount(): int
    {
        return $this->curedAnimals;
    }

    public function getRole(): string
    {
        return self::ROLE;
    }
}
