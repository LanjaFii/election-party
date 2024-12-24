<?php
    include('header.php');
?>
<?php
    include('liaisonBD.php');
    $id=$_GET["id"];  //Mispecifier ny id anle olona hanovana modification 
    
    $recup_nom = $bdd->prepare("SELECT nom FROM liste WHERE id=$id ");
    $recup_nom->execute();
    $nom = $recup_nom->fetch();

    $recup_prenom = $bdd->prepare("SELECT prenoms FROM liste WHERE id=$id ");
    $recup_prenom->execute();
    $prenom = $recup_prenom->fetch();

    $recup_adresse = $bdd->prepare("SELECT adresse FROM liste WHERE id=$id ");
    $recup_adresse->execute();
    $adresse = $recup_adresse->fetch();

    $recup_cin = $bdd->prepare("SELECT cin FROM liste WHERE id=$id ");
    $recup_cin->execute();
    $cin = $recup_cin->fetch();
?>

<link rel="stylesheet" href="modification.css">
    
<fieldset>
<legend>Modification <br> of <br> voter</legend>
<?php
    echo '<form method="post" action="modifier.php?id=' .$id. '">'; //Mandefa an'ilay zavatra hohovaina ao amin'ny misy ny id anle olona
?>
    <label for="nom">Name</label>
    <input required="required" type="text" name="nom" id="nom" value="<?php echo $nom[0]; ?>"><br>

    <label for="prenom">First name</label>
    <input required="required" type="text" name="prenom" id="prenom" value="<?php echo $prenom[0]; ?>"><br>

    <label for="adresse">Adress</label>
    <input required="required" type="text" name="adresse" id="aresse" value="<?php echo $adresse[0]; ?>"><br>

    <label for="cin">ICN</label>
    <input required="required" type="number" name="cin" id="cin" value="<?php echo $cin[0]; ?>"><br><br><br><br>

    <input type="submit" value="modify" class="mdf">

</form>
</fieldset>

<?php
    include('footer.php');
?>