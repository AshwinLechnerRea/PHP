<?php 
require_once("includes/functions.php");
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
    <?php
    echo printBusinessCard("Ashwin","lechner",30,"student","Nuth","hi");
    // Zelfs bij "declare(strict_types=1);" werkt $age met een string wat alleen cijfers bevat, hoe kan dit? 
    echo printBusinessCard("tom","Sliepen","29","student","Heerlen");
    echo printBusinessCard(firstName: "Remo", lastName:"Heldens", location:"Heerlen",biography:"Random bio");
    ?>
</body>
</html>