<?php
    $user = 'root';
    try{
        $dbh = new PDO('mysql:host=localhost;dbname=split_db', $user, '');
    }
    catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    $test = 'test';
?>