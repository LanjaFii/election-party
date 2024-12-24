<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Election</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
        <form class="interface" action="loginAdmin.php" method="post">
            <label for="admin">Utilisateur</label>
                <div class="login">
                    <?php
                        $utilisateur = $_GET["id"];
                    ?>
                    <input type="text" id="admin" name="admin" value="<?php echo $utilisateur ?>">
                </div>
            <br><br><br>

            <label for="password">Mot de passe de sécurité</label>
                <div class="password">
                    <input type="password" id="password" name="mdp" placeholder="réessayez un nouvau mot de passe">
                </div>
            <br>
            <br>
                <div>
                    <input class="acceder" type="submit" value="Acceder">
                </div>
        </form>
    </div>
    <h3 class="mess">Mot de passe ou utilisateur érroné, veillez reessayer!</h3>
</body>
</html>