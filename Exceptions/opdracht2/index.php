<?php
require_once('includes/functions.php');
$randomHash = generateHash(10);
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
    <?= $randomHash ?>
</body>

</html>