<?php
 $bdd=new PDO('mysql:host=localhost;dbname=projet_php_lanja','root','');
 $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$compteur = $bdd->prepare("SELECT COUNT(*) FROM liste WHERE candidat!=''");  //Manisa izay rehetra efa nifidy
                        $compteur->execute();
                        $total = $compteur->fetch();
include("pourcentage_class.php");
?>


<link rel="stylesheet" href="resultat.css">
<div class="yep">
    <table>
        <tr>
            <td>
                <div>
                    <h2 class="cand">Hery RAJAONARIMAMPIANINA</h2>
                    <img class="hery_img" src="image/hery.jpg" alt="Hery">
                </div>
                <?php
                    try{
                        $bdd=new PDO('mysql:host=localhost;dbname=projet_php_lanja','root','');
                        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                        $hery = $bdd->prepare("SELECT COUNT(*) FROM liste WHERE candidat='hery'");  //Manisa an'izay nifidy an'i HERY
                        $hery->execute();
                        $resultat1 = $hery->fetch();
                                            
                $calc1= new Pourcentage();
                $t1= $total[0];
                $h= $resultat1[0];
                $pourchery= $calc1->Prct($t1,$h);

                        echo '<h4 class="pourcentage">' .$pourchery. '%  </h4>';
                        echo '<h4>Vote : ' .$h. ' of ' .$t1. '</h4>' ;

                    }
                    catch(PDOException $e){
                        echo 'Echec: ' .$e->getMessage();
                    }
                ?>
            </td>



            <td>
                <div>
                    <h2 class="cand">Andry RAJOELINA</h2>
                    <img class="andry_img" src="image/andry.jpg" alt="Andry">    
                </div>
                <?php
                    try{
                        $bdd=new PDO('mysql:host=localhost;dbname=projet_php_lanja','root','');
                        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $andry = $bdd->prepare("SELECT COUNT(*) FROM liste WHERE candidat='andry'");  //Manisa an'izay nifidy an'i ANDRY
                        $andry->execute();
                        $resultat2 = $andry->fetch();

                    $calc2 = new Pourcentage();
                    $t2= $total[0];
                    $raj= $resultat2[0];
                    $pourcandry= $calc2->Prct($t2,$raj);

                        echo '<h4 class="pourcentage">' .$pourcandry. '%  </h4>';
                        echo '<h4>Vote : ' .$raj. ' of ' .$t2. '</h4>' ;

                    }
                    catch(PDOException $e){
                        echo 'Echec: ' .$e->getMessage();
                    }
                ?>
            </td>



            <td>
                <div>
                <h2 class="cand">Marc RAVALOMANANA</h2>
                    <img class="ravalo_img" src="image/ravalo.jpg" alt="Ravalo">
                </div>
                <?php
                    try{
                        $bdd=new PDO('mysql:host=localhost;dbname=projet_php_lanja','root','');
                        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $ravalo = $bdd->prepare("SELECT COUNT(*) FROM liste WHERE candidat='ravalo'");  //Manisa an'izay nifidy an'i RAVALO
                        $ravalo->execute();
                        $resultat3 = $ravalo->fetch();

                    $calc3 = new Pourcentage();
                    $t3= $total[0];
                    $rav= $resultat3[0];
                    $pourcravalo= $calc3->Prct($t3,$rav);
    
                        echo '<h4 class="pourcentage">' .$pourcravalo. '%  </h4>';
                        echo '<h4>Vote : ' .$rav. ' of ' .$t3. '</h4>' ;


                    }
                    catch(PDOException $e){
                        echo 'Failure: ' .$e->getMessage();
                    }
                ?>
            </td>


        </tr>
    </table>

</div>