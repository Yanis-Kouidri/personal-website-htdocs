<?php

    try {
        $bd=new PDO ("mysql:host=localhost;dbname=jm002743","jm002743","jm00274371ae");
        $bd->exec('SET NAMES utf8');
    }
    catch (Exception $e) {
        die("Connexion impossible");
    }
?>