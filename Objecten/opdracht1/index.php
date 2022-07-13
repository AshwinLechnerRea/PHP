<?php
require_once('classes/Person.php');
$person1 = new Person();
$person1->name = 'Ashwin Lechner';
$person1->age = 30;
$person2 = new Person();
$person2->name = 'Tom Sliepen';
$person2->age = 29;
$person2->school = "REA College Heerlen";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 1</title>
</head>

<body>
    <h2>Person 1:</h2>
    <p>
        <?php echo $person1->name . ' is ' . $person1->age . ' jaar oud en volgt een opleiding bij ' . $person1->school ?>
    </p>
    <h2>Person 2:</h2>
    <p>
        <?php echo $person2->name . ' is ' . $person2->age . ' jaar oud en volgt een opleiding bij ' . $person2->school ?>
    </p>

</body>

</html>