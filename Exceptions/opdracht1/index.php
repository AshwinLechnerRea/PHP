<?php
require_once('includes/functions.php');
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
    <?php
    $grades = createNumbers(4);
    var_dump($grades);
    readNumbers($grades); ?>
</body>

</html>