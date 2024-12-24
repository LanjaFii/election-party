<?php
$id=$_GET["id"];
$cin= $_POST['cin'];
$nom= $_POST['nom'];
$prenoms= $_POST['prenom'];
$adresse= $_POST['adresse'];

try{
    $bdd=new PDO('mysql:host=localhost;dbname=projet_php_lanja','root','');
    $bdd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $modif = $bdd-> prepare("UPDATE liste SET cin=:cin, nom=:nom, prenoms=:prenoms, adresse=:adresse WHERE id=$id");

$modif-> bindParam(':cin', $cin);
$modif-> bindParam(':nom', $nom );
$modif-> bindParam(':prenoms', $prenoms );
$modif-> bindParam(':adresse', $adresse );

$modif->execute();

header("Location:projet.php?id=liste");
}

catch(PDOException $e){
echo 'Echec de la modification: Vous avez entré un CIN appartenant déja a quelqu\'un d\'autre';  
}

?>


