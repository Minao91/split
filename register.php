<?php
    require('./inc/core.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./assets/css/register.css">

        <title><?php echo $site_name; ?> - Inscription</title>
    </head>
    <body>
        <div id="left">
            <div id="title"><?php echo $site_name; ?> - Inscription</div>
            <div id="step">• Pensez bien à avoir lu le règlement avant de vous inscrire</div>
            <form action="" method="POST">
                <input type="text" name="" placeholder="Pseudonyme">
                <input type="mail" name="" placeholder="Adresse mail">
                <input type="password" name="" placeholder="Mot de passe">
                <input type="password" name="" placeholder="Répéter votre mot de passe">
                <input type="submit" name="" value="s'inscrire">
            </form>
        </div>
        <div id="right">
            <div id="box_mid">
                droite
            </div>
        </div>

        <script src="./assets/js/register.js"></script>
    </body>
</html>