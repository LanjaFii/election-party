<link rel="stylesheet" href="liste.css">
<div class="content">
    <table class="list">
        <tr>
            <td class="nom">Nom</td>
            <td class="prénoms">Prénoms</td>
            <td class="adresse">Adresse</td>
            <td class="action" colspan="2">Action</td>
        </tr>
        <?php
        include("liaisonBD.php");
        $selection= $bdd->query("SELECT id,cin,nom,prenoms,adresse FROM liste");
        while($donnees= $selection->fetch()){
            echo "<tr><td>";
            echo $donnees["nom"];
            echo "</td><td>";
            echo $donnees["prenoms"];
            echo "</td><td>";
            echo $donnees["adresse"];
            echo "</td><td>";
            
            if ($_SESSION["statut"]=="administrateur"){
                echo "<a href='modification.php?id=".$donnees["id"]."'> Modifier </a>";
                echo "</td><td>";
                echo "<a href='suppression.php?id=".$donnees["id"]."'>Supprimer</a>";
                echo "</td></tr>";
            }
            else{
                echo "";
                echo "</td><td>";
                echo "";
                echo "</td></tr>";
            }
        }
        ?>
    </table>
</div>
