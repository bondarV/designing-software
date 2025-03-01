<?php
namespace Inventory;

use Animals\Animal;
use Employees\Employee;

class ZooInventory {
    private array $animals = [];
    private array $employees = [];

    public function addAnimal(Animal $animal): void {
        $this->animals[] = $animal;
    }

    public function addEmployee(Employee $employee): void {
        $this->employees[] = $employee;
    }

    public function showAnimals(): void {
        foreach ($this->animals as $animal) {
            echo $animal->getName().'<br>';
        }
    }

    public function showEmployees(): void {
        foreach ($this->employees as $employee) {
            echo "Employee: {$employee->getName()}, Role: {$employee->getAge()}\n";
        }
    }
}