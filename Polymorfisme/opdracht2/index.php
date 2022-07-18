<?php
require_once('classes/Drawable.php');
$rect1 = new Rectangle(0, 0, 150, 100, 'royalblue');
$rect2 = new Rectangle(300, 250, 100, 150, 'tomato');
$rect3 = new Rectangle(125, 125, 150, 150, 'mediumseagreen');
$rectangles = [$rect1, $rect2];
$canvas = new Drwaing(400, 400, $rectangles);
$canvas->addFigure($rect3);
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
    $canvas->draw();
    ?>
</body>

</html>