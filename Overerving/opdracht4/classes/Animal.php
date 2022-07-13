<?php
abstract class Animal
{
    protected int $age;
    public function __construct(int $age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public final function eat()
    {
        echo 'Nom nom nom.';
    }
    public function celebrateBirthday()
    {
        $this->age++;
        echo 'happy birthday ! You are now ' . $this->age . ' years old!';
    }
    abstract public function sayHello();
}
class Human extends Animal
{
    private string $education;
    private string $job;


    public function __construct(string $education, string $job, int $age)
    {
        parent::__construct($age);
        $this->education = $education;
        $this->job = $job;
    }
    public function getEducation(): string
    {
        return $this->education;
    }
    public function setEducation(string $education)
    {
        $this->education = $education;
    }
    public function getJob(): string
    {
        return $this->job;
    }
    public function setJob(string $job)
    {
        $this->job = $job;
    }
    public function contemplateLife()
    {
        exit();
    }
    public function sayHello()
    {
        echo 'hello, i am a human!';
    }
    // public function celebrateBirthday()
    // {
    //     $this->age++;
    //     if ($this->age < 50) {
    //         echo 'happy birthday ! You are now ' . $this->age . ' years old!';
    //     } else {
    //         $this->contemplateLife();
    //     }
    // }
}
class Dog extends Animal
{
    public string $breed;
    public function __construct(string $breed, int $age)
    {
        parent::__construct($age);
        $this->breed = $breed;
    }
    public function getBreed(): string
    {
        return $this->breed;
    }
    public function setBreed(string $breed)
    {
        $this->breed = $breed;
    }
    public function bork()
    {
        echo 'Bork!';
    }
    public function sayHello()
    {
        echo 'hello, i am a dog!';
    }
}