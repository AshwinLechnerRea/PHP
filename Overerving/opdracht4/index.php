<?php
require_once('classes/Animal.php');
$henk = new Human('Hotelschool', 'kok', 40);
$mika = new Dog('German Shepherd', 7);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 3</title>
</head>

<body>
    <?= $henk->sayHello() ?>
    <br>
    <?= $mika->sayHello() ?>
</body>

</html>