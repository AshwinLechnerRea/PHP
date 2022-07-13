<?php
require_once('classes/Mareep.php');
$mareep1 = new Mareep(40);
$mareep2 = new Mareep(60);
$mareep3 = new Mareep(10);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 4</title>
</head>

<body>
    <p> <?= $mareep1->tackle() ?></p>
    <p> <?= $mareep2->tackle() ?></p>
    <p><?= $mareep3->tackle() ?></p>
    <p><?= $mareep3->groupAttack() ?></p>
</body>

</html>