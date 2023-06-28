<?php

abstract class Person
{
    private string $name;
    private string $role;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->role = $this->getRole();
    }

    abstract public function getRole(): string;

    public function getName(): string
    {
        return $this->name;
    }
}