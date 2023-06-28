<?php


require_once 'Person.php';
require_once 'Patient.php';
require_once 'Staff.php';
require_once 'Doctor.php';
require_once 'Nurse.php';
require_once 'Appointment.php';

$patient1 = new Patient("John",  5000,);
$doctor1 = new Doctor("Jane", 8000);
$nurse1 = new Nurse("Joe", 5000);

// create an appointment
$appointment1 = new Appointment($patient1, $doctor1, "2023-04-20 10:00:00", "2023-04-20 11:00:00",  );

// display the appointment information
echo "Appointment information:<br>";
echo "Patient: " . $appointment1->getPatient()->getName() . "<br>";
echo "Doctor: " . $appointment1->getDoctor()->getName() . "<br>";

echo "Appointment time: " . $appointment1->getStartTime()->format('Y-m-d H:i:s') . " - " . $appointment1->getEndTime()->format('Y-m-d H:i:s') . "<br>";
echo "Costs: " . $appointment1->getCosts() . "<br>";
