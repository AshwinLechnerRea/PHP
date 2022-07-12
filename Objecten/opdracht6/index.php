<?php
require_once('classes/Person.php');
require_once('classes/Product.php');
require_once('classes/Dice.php');
require_once('classes/Mareep.php');
require_once('classes/Validator.php');

$product2 = new Product();
$product2->setName('Blik erwtensoep');
$product2->setPrice(1.99);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 6</title>
</head>

<body>
    <pre>
    <?php
        //Gevonden op StackOverflow, snap het niet 100%
        print_r($userDefinedClasses = array_filter(
        get_declared_classes(),
        function($className) {
            return !call_user_func(
                array(new ReflectionClass($className), 'isInternal')
            );
        }
    ));
    echo '<br>';
    echo $product2->getname();
    echo '<br>';
    echo $product2->getPrice();
    echo '<br>';
    if (method_exists($product2, 'calculateCosts')){
	    echo 'De method is aanwezig.';
    }else{
        echo 'De method is niet aanwezig.';
    }
    echo '<br>';
    if (property_exists($product2, 'calculateCosts')){
	    echo 'De property is aanwezig.';
    }else{
        echo 'De property is niet aanwezig.';
    }
    ?>
</pre>
</body>

</html>