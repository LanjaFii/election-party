<link rel="stylesheet" href="liste_elir.css">
<div class="content">
    <h2 class="info">Liste des elcteurs qui n'ont pas encore éffectué son vote</h2>
<div class="lst">
    <table class="liste_pas_elir">
        <tr>
            <td class="nom">Nom</td>
            <td class="prénoms">Prénoms</td>
            <td class="cin">CIN</td>
            <td class="adresse">Adresse</td>
        </tr>
        <?php
        include("liaisonBD.php");
        $selection= $bdd->query("SELECT id,cin,nom,prenoms,adresse FROM liste WHERE candidat=''");
        while($donnees= $selection->fetch()){
            echo "<tr><td>";
            echo $donnees["nom"];
            echo "</td><td>";
            echo $donnees["prenoms"];
            echo "</td><td>";
            echo $donnees["cin"];
            echo "</td><td>";
            echo $donnees["adresse"];
            echo "</td>";
        }
        ?>
    </table>
</div>
        <?php
            try{
                $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $total = $bdd->prepare("SELECT COUNT(*) FROM liste");
                $total -> execute();
                $tot = $total->fetch();

                $tsynifidy = $bdd->prepare("SELECT COUNT(*) FROM liste WHERE candidat =''");
                $tsynifidy -> execute();
                $tsnf = $tsynifidy->fetch();
                $ireo_tsy_nifidy = $tsnf[0];

                if ($ireo_tsy_nifidy==1){
                    echo '<h3>1 personne sur ' .$tot[0]. ' n\'a pas encore éffectué son vote</h3>' ; 
                } else{
                    echo '<h3>' .$ireo_tsy_nifidy. ' personnes sur ' .$tot[0]. ' n\'ont pas encore éffectué son vote </h3>' ;
                }

            }
            catch(PDOException $e){
                echo 'Echec: ' .$e->getMessage();
            }
        ?>
</div>

