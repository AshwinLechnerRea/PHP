<?php
class Animal
{
    public function eat()
    {
        echo 'Nom nom nom.';
    }
}
class Human extends Animal
{
    private string $education;
    private string $job;

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
}
class Dog extends Animal
{
    public string $breed;

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
}