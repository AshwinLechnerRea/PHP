<?php
require_once('classes/Animal.php');
$henk = new Human();
$henk->setAge(55);
$henk->setEducation('REA College');
$henk->setJob('Programmer');
$mika = new Dog();
$mika->setAge(7);
$mika->setBreed('German Shepherd')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 2</title>
</head>

<body>
    <?= $henk->celebrateBirthday() ?>
    <br>
    <?= $mika->celebrateBirthday() ?>
</body>

</html>