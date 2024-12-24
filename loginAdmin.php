<?php
session_start();
include('liaisonBD.php');
try{
    $bdd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$admin=$_POST['admin'];
$mdp=$_POST['mdp'];
$requete=$bdd->query("SELECT*FROM administrateurs WHERE admin='".$admin."' AND mdp='".$mdp."' ");
$i=0;
while($donnees=$requete->fetch()){
    $i++;
    $_SESSION["nom"]= $donnees["nom"];
    $_SESSION["statut"]= $donnees["statut"];
}
if ($i==1){header ("Location:projet.php?id=inscription");}
    else {header ("Location:index1.php?id=$admin");} 
}

catch(PDOException $e){
    header ("Location:index1.php?id=$admin");  
    }

?>