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
            <label for="admin">Mpisahana</label>
                <div class="login">
                    <?php
                        $utilisateur = $_GET["id"];
                    ?>
                    <input type="text" id="admin" name="admin" value="<?php echo $utilisateur ?>">
                </div>
            <br><br><br>

            <label for="password">Teny miafina</label>
                <div class="password">
                    <input type="password" id="password" name="mdp" placeholder="manandrama teny miafina hafa">
                </div>
            <br>
            <br>
                <div>
                    <input class="acceder" type="submit" value="Hiditra">
                </div>
        </form>
    </div>
    <h3 class="mess">Teny miafina na mpisahana diso, amdramo ihany!</h3>
</body>
</html>