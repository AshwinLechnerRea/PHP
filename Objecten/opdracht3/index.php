<?php
require_once('classes/Dice.php');
$dice1 = new Dice();
$d20 = new Dice(20);
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
    <h2>Normal dice</h2>
    <p>You rolled a <?= $dice1->roll() ?></p>
    <h2>D20 </h2>
    <P>You rolled <?= $d20->roll() ?></P>
    <P>You rolled <?= $d20->roll() ?></P>
    <P>You rolled <?= $d20->roll() ?></P>
</body>

</html>