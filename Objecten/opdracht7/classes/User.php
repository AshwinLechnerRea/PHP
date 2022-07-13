<?php
class User
{
    private string $name;
    private string $password;
    private string $email;
    private int $age;
    private bool $active;
    public function __construct(string $name, string $password, string $email, int $age, bool $active = true)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->age = $age;
        $this->active = $active;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getActive(): bool
    {
        return $this->active;
    }
    public function setActive(bool $active)
    {
        $this->active = $active;
    }
    public function showData()
    {
        echo ' 
        <table class=';
        if ($this->active == true) {
            echo '"active"';
        } else {
            echo '"inactive"';
        };
        echo '>
                <tr>
                    <th>Naam</th>
                    <td>' . $this->name . '</td>
                </tr>
                <tr>
                    <th>Wachtwoord</th>
                    <td>' . $this->password . '</td>
                </tr>
                <tr>
                    <th>E-mailadres</th>
                    <td>' . $this->email . '</td>
                </tr>
                <tr>
                    <th>Leeftijd</th>
                    <td>' . $this->age . '</td>
                </tr>
            </table>';
    }
}