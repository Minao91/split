<?php
    // Ne pas toucher
    $site_name = "SPLIT";
    $site_author = "Minao";

    // Connexion à la base de donnée + session_start
    $user = 'root';
    $pass = '';
    try{
        $dbh = new PDO('mysql:host=localhost;dbname=split_db', $user, $pass);
    }
    catch (PDOException $e){
        die();
    }

    session_start();

    // Test
?>