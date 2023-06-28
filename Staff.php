<?php



abstract class Staff

{
    private string $name;
    private string $role;
    protected static float $salary;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->role = $this->getRole();
        self::$salary = 0.0; // initialize salary to default value
    }

    public function setSalary(float $salary): void
    {
        self::$salary = $salary;
    }

    public function getSalary(): float
    {
        return self::$salary;
    }


    abstract public function getRole(): string;

    public function getName(): string
{
    return $this->name;
}
}
