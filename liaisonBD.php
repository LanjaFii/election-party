<?php
    try{
        $bdd=new PDO('mysql:host=localhost;dbname=projet_php_lanja','root','');
    } 
    catch (Exception $e) 
    {
        die('Erreur;'.$e->getMessage());
    }
?>