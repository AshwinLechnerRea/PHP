<?php
require_once('classes/Cell.php');
require_once('classes/Row.php');
require_once('classes/Table.php');
// $cell1 = new StrongCell("Noord-West");
// $cell2 = new Cell("Noord");
// $cell3 = new StrongCell("Noord-Oost");
// $cell4 = new Cell("West");
// $cell5 = new Cell("Centrum");
// $cell6 = new Cell("Oost");
// $cell7 = new StrongCell("Zuid-West");
// $cell8 = new Cell("Zuid");
// $cell9 = new StrongCell("Zuid-Oost");
// $row1 = new Row();
// $row1->append($cell1);
// $row1->append($cell2);
// $row1->append($cell3);
// $row2 = new Row();
// $row2->append($cell4);
// $row2->append($cell5);
// $row2->append($cell6);
// $row3 = new Row();
// $row3->append($cell7);
// $row3->append($cell8);
// $row3->append($cell9);
// $table1 = new Table();
// $table1->append($row1);
// $table1->append($row2);
// $table1->append($row3);
$cell1 = new UnderlineCell("Mario");
$cell2 = new Cell("Luigi");
$cell3 = new Cell("Peach");
$cell4 = new EmphasisCell("Bowser");
$cell5 = new StrikethroughCell("Donkey");
$cell6 = new Cell("Diddy");
$cell7 = new UnderlineCell("Dixie");
$cell8 = new Cell("Cranky");
$cell9 = new Cell("Link");
$cell10 = new StrikethroughCell("Zelda");
$cell11 = new StrongCell("Midna");
$cell12 = new Cell("Ganondorf");
$row1 = new Row();
$row1->append($cell1);
$row1->append($cell2);
$row1->append($cell3);
$row1->append($cell4);
$row2 = new Row();
$row2->append($cell5);
$row2->append($cell6);
$row2->append($cell7);
$row2->append($cell8);
$row3 = new Row();
$row3->append($cell9);
$row3->append($cell10);
$row3->append($cell11);
$row3->append($cell12);
$table1 = new Table();
$table1->append($row1);
$table1->append($row2);
$table1->append($row3);
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
    <?php $table1->draw() ?>
</body>

</html>