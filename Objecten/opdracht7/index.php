<?php
require_once('classes/User.php');
$user1 = new User('Ashwin', 'Hallo123', 'ashwin.lechner@gmail.com', 30, true);
$user2 = new User('Remo', 'Vaarwel123', 'remo@gmail.com', 29, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Opdracht 7</title>
</head>

<body>
    <h3>Maak nieuwe gebruiker</h3>
    <form action="index.php" method="post">
        <label for="name">Naam</label>
        <input type="text" name="name" id="name">
        <label for="pass">Wachtwoord</label>
        <input type="password" name="pass" id="pass">
        <label for="email">E-mailadres</label>
        <input type="email" name="email" id="email">
        <label for="age">Leeftijd</label>
        <input type="number" name="age" id="age">
        <label for="active">Active gebruiker?</label>
        <input type="checkbox" name="active" id="active">
        <?php
        if (isset($errors)) {
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        } ?>
        <input type="submit" name="submit" value="Gebruiker toevoegen">
    </form>
    <?php
    $user1->showData();
    $user2->showData();
    ?>

</body>

</html>