<?php

namespace Employees;

abstract class Employee
{
    protected string $role;

    public function __construct(
        protected string $name,
        protected int $age,
        protected string $gender,
        protected float|int|null $experienceYears = null,
        string $role = ''
    ) {
        $this->role = $role;
    }

    abstract public function calculateSalary(int|float $finalMonthWorkHours): int|float;

    abstract public function doWork(): void;

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): string {
        return $this->age;
    }

    public function getRole(): string {
        return $this->role; // Return the actual role instead of 'Employee'
    }
}
