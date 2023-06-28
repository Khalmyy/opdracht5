<?php

class Nurse extends Staff
{
    public function __construct(string $name, float $salary)
    {
        parent::__construct($name, $salary);
    }

    public function getRole(): string
    {
        return "Nurse";
    }
    public function getHourlyRateN()
    {
        $this->getSalary() / 160;
    }
}
