<?php
class Dice
{
    private int $eyes;

    public function __construct(int $eyes = 6)
    {
        $this->eyes = $eyes;
    }

    public function getEyes(): int
    {
        return $this->eyes;
    }
    public function setEyes(int $eyes)
    {
        $this->eyes = $eyes;
    }
    public function roll(): int
    {
        return rand(1, $this->eyes);
    }
}