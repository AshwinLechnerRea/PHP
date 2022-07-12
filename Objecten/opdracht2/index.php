<?php
require_once('classes/Product.php');
$product1 = new Product();
$product1->setName('Golden Power');
$product1->setPrice(0.39);
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
    <h2>Productinformatie</h2>
    <p>
        <?php echo 'Het product '. $product1->getName() .' kost ' . $product1->getPrice() .' per stuk' ?>
    </p>
    <h2>Totaalbedrag</h2>
    <p>
        <?= $product1->calculateCosts(12)?>
    </p>
</body>

</html>