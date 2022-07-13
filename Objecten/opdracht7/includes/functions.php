<?php
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $errors = [];
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $errors[] .= 'Voeg naam toe!';
    }
    if (!empty($_POST['pass'])) {
        $password = $_POST['pass'];
    } else {
        $errors[] .= 'Voeg wachtwoord toe!';
    }
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $errors[] .= 'Voeg emailadres toe!';
    }
    if (!empty($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        $errors[] .= 'Voeg leeftijd toe!';
    }
    if (!empty($_POST['active'])) {
        $active = true;
    } else {
        $active = false;
    }
    if (empty($errors)) {
        $user3 = new User($name, $password, $email, $age, $active);
        $user3->showData();
    }
}