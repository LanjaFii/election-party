<link rel="stylesheet" href="liste_elir.css">
<div class="content">
    <h2 class="info">Liste des elcteurs qui n'ont pas encore éffectué son vote</h2>
<div class="lst">
    <table class="liste_pas_elir">
        <tr>
            <td class="nom">Name</td>
            <td class="prénoms">First name</td>
            <td class="cin">ICN</td>
            <td class="adresse">Adress</td>
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
                    echo '<h3>one person of ' .$tot[0]. ' have not voted yet</h3>' ; 
                } else{
                    echo '<h3>' .$ireo_tsy_nifidy. ' persons of ' .$tot[0]. ' have not voted yet </h3>' ;
                }

            }
            catch(PDOException $e){
                echo 'Failure: ' .$e->getMessage();
            }
        ?>
</div>

