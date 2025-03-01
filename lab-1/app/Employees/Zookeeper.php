<?php
namespace Employees;

use Utilities\WorkHourValidator;
use Animals\Animal;

class Zookeeper extends Employee
{
    const STAKE_PER_HOUR = 15;
    const ROLE = 'Zookeeper';
    protected array $animalsUnderControl = [];

    public function __construct(
        protected string         $name,
        protected int            $age,
        protected string         $gender,
        protected float|int|null $experienceYears = null,
        array                    $animalsUnderControl = []
    )
    {
        parent::__construct($name, $age, $gender, $experienceYears, self::ROLE); // No $role argument
        $this->animalsUnderControl = $animalsUnderControl;
    }

    public function calculateSalary(int|float $finalMonthWorkHours): int|float
    {
        WorkHourValidator::validate($finalMonthWorkHours);
        return $this->calculateSalaryForMonth($finalMonthWorkHours);
    }

    private function calculateSalaryForMonth(int|float $finalMonthWorkHours): int|float
    {
        return $finalMonthWorkHours * self::STAKE_PER_HOUR;
    }

    public function doWork(): void
    {
        $this->TargetsZookeeperInfoDisplay();
        $this->careAboutEachAnimal();
    }

    private function TargetsZookeeperInfoDisplay(): void
    {
        echo "$this->name, the zookeeper, is feeding the animals today.\n";
        echo "$this->name is cleaning the animal enclosures.\n";
        echo "$this->name is providing enrichment activities for the animals.\n";
    }

    private function careAboutEachAnimal(): void
    {
        foreach ($this->animalsUnderControl as $animal) {
            if ($animal instanceof Animal) {
                echo "$this->name is taking care of " . $animal->getName() . ".\n";
            }
        }
    }

    public function addAnimal(Animal $animal): void
    {
        $this->animalsUnderControl[] = $animal;
    }

    public function getAnimalsUnderControl(): array
    {
        return $this->animalsUnderControl;
    }
}
