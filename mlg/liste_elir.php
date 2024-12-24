<link rel="stylesheet" href="liste_elir.css">
<div class="content">
    <h2 class="info">Listr'ireo izay efa nifidy</h2>
<div class="lst">
    <table class="listelir">
        <tr>
            <td class="nom">Anarana</td>
            <td class="prénoms">Fanampiny</td>
            <td class="cin">CIN</td>
            <td class="candidat">Mpilatsaka</td>
        </tr>
        <?php
        include("liaisonBD.php");
        $selection= $bdd->query("SELECT id,cin,nom,prenoms,candidat FROM liste WHERE candidat!=''");
        while($donnees= $selection->fetch()){
            echo "<tr><td>";
            echo $donnees["nom"];
            echo "</td><td>";
            echo $donnees["prenoms"];
            echo "</td><td>";
            echo $donnees["cin"];
            echo "</td><td>";
            echo $donnees ["candidat"];
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

                $nifidy = $bdd->prepare("SELECT COUNT(*) FROM liste WHERE candidat!=''");
                $nifidy -> execute();
                $nf = $nifidy->fetch();
                $ireo_nifidy = $nf[0];

                if ($ireo_nifidy==1){
                    echo '<h3>Olona iray tao anatin\'ny olona ' .$tot[0]. ' no nifidy</h3>' ; 
                } else{
                    echo '<h3>Olona ' .$ireo_nifidy. ' tao anatin\'ny olona ' .$tot[0]. ' no nifidy</h3>' ;
                }

            }
            catch(PDOException $e){
                echo 'Tsy mety: ' .$e->getMessage();
            }
        ?>
</div>

