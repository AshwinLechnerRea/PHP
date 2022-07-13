<?php
require_once('classes/Validator.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 5</title>
</head>

<body>
    <?php
    if (Validator::validateEmail('ashwin.lechner@gmail.com')) {
        echo 'correct e-mail';
    } else {
        echo 'Incorrect e-mail';
    }
    echo '<br>';
    if (Validator::validateEmail('ashwin.lechner.gmail.com')) {
        echo 'Valid e-mail';
    } else {
        echo 'Invalid e-mail';
    }

    Validator::validateEmail('hello');
    ?>
</body>

</html>