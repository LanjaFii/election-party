<?php

try{
    $bdd=new PDO('mysql:host=localhost;dbname=projet_php_lanja','root','');
    $bdd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $cin= $_POST['cin'];
    $nom= $_POST['nom'];
    $prenoms= $_POST['prenoms'];
    $adresse= $_POST['adresse'];
    $requete=$bdd->query("INSERT INTO liste (cin,nom,prenoms, adresse) 
    VALUES ('".$cin."','".$nom."','".$prenoms."','".$adresse."')");
    header("Location:projet.php?id=liste");
}

catch(PDOException $e){
    session_start();
    $_SESSION['nm'] = $_POST['nom'];
    $_SESSION['pr'] = $_POST['prenoms'];
    $_SESSION['adr'] = $_POST['adresse'];
    header("Location:projet.php?id=inscription1");  
    }

?>

