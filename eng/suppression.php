<?php
include('liaisonBD.php');
    $id=$_GET["id"];
    $delete=$bdd->query("DELETE FROM liste WHERE id=". $id);
    header ("Location: projet.php?id=liste");
?>