<?php


class Appointment {
    private $patient;
    private $doctor;
    private $nurse;
    private $startTime;
    private $endTime;
    private $costs;

    public function __construct(Patient $patient, Doctor $doctor, string $startTime, string $endTime) {
        $this->patient = $patient;
        $this->doctor = $doctor;
        $this->startTime = new DateTime($startTime);
        $this->endTime = new DateTime($endTime);
        $this->costs = $this->getCosts();
    }

    public function getPatient(): Patient {
        return $this->patient;
    }

    public function getDoctor(): Doctor {
        return $this->doctor;
    }

    public function getNurse(): ?Nurse {
        return $this->nurse;
    }

    public function setNurse(Nurse $nurse): void {
        $this->nurse = $nurse;
    }

    public function getStartTime(): DateTime {
        return $this->startTime;
    }

    public function setStartTime(string $startTime): void {
        $this->startTime = new DateTime($startTime);
    }

    public function getEndTime(): DateTime
    {
        return $this->endTime;
    }

    public function setEndTime(string $endTime): void
    {
        $this->endTime = new DateTime($endTime);
    }

    public function getCosts(): float
    {
        $duration = $this->endTime->diff($this->startTime);
        $hours = $duration->h + ($duration->days * 24);
        $doctor_cost = $this->doctor->getHourlyRate() * $hours;
       // $nurse_cost = $this->nurse->getHourlyRate() * $hours;
        return $doctor_cost ;
    }
}



