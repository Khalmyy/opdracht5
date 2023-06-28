<?php


class Doctor extends Staff

{


    const WORKING_HOURS = 40;


    public function __construct(string $name, float $salary)
    {
        parent::__construct($name, $salary);
    }

    public function getRole(): string
    {
        return "Doctor";
    }

    public function getHourlyRate()
    {
        $this->getSalary() / 160;
    }
}



