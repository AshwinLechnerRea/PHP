<?php
require_once('classes/User.php');
$user1 = new User('Ashwin','Hallo123','ashwin.lechner@gmail.com',30,true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 7</title>
</head>

<body>
    <?php
echo $user1->getName();
?>
</body>

</html>