<?php

namespace testTask\app;

class Employee
{
    private string $name;
    private string|float $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getSalary():string|float
    {
        return $this->salary;
    }
}