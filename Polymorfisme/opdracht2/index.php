<?php
require_once('classes/Drawable.php');
$rect1 = new Rectangle(0, 0, 400, 50, 'slateblue');
$rect2 = new Rectangle(0, 350, 400, 50, 'slateblue');
$ellipse1 = new Ellipse(50, 200, 50, 125, 'turquoise');
$ellipse2 = new Ellipse(200, 200, 50, 125, 'mediumturquoise');
$ellipse3 = new Ellipse(350, 200, 50, 125, 'darkturquoise');
$figures = [$rect1, $rect2, $ellipse1, $ellipse2];
$canvas = new Drwaing(400, 400, $figures);
$canvas->addFigure($ellipse3);
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
    <?php
    $canvas->draw();
    ?>
</body>

</html>