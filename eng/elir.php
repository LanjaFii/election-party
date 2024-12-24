<?php

try{
    $bdd=new PDO('mysql:host=localhost;dbname=projet_php_lanja','root','');
    $bdd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $inclu = $bdd-> prepare("SELECT COUNT(*) FROM liste WHERE cin=:cin");

    $inclu-> bindParam(':cin', $cin);

    $candidat = $_POST['candidat'];
    $cin = $_POST['cin'];
    
    $inclu->execute();
    $included = $inclu->fetch();

    if($included[0]==0){
        header ("Location:projet.php?id=election1");
    }

    else{
        try{
            $bdd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $voted = $bdd-> prepare("SELECT vote FROM liste WHERE cin=:cin");

            $voted-> bindParam(':cin', $cin);

            $voted->execute();
            $efa_ve = $voted->fetch();

            if($efa_ve[0]=='oui'){
                header ("Location:projet.php?id=election2");
            }

            else{
                $nifidy = $bdd-> prepare("UPDATE liste SET vote='oui' WHERE cin=:cin");
                $elir = $bdd-> prepare("UPDATE liste SET candidat=:candidat WHERE cin=:cin");

                $nifidy-> bindParam(':cin', $cin);
                $elir-> bindParam(':candidat', $candidat );
                $elir-> bindParam(':cin', $cin);

                $nifidy->execute();
                $elir->execute();

                header ("Location:projet.php?id=resultat");
                    
            }
            
        }
        
        
        
        catch(PDOException $e){
            echo 'Fail: ' .$e -> getMessage();  
            }        
    }
}

catch(PDOException $e){
    echo 'Fail: ' .$e -> getMessage();  
    }
?>