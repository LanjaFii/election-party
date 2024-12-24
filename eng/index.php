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
            <label for="admin">Login</label>
                <div class="login">
                    <input type="text" id="admin" name="admin">
                </div>
            <br><br><br>

            <label for="password">Security Password</label>
                <div class="password">
                    <input type="password" id="password" name="mdp">
                </div>
            <br>
            <br>
                <div>
                    <input class="acceder" type="submit" value="Log">
                </div>
        </form>
    </div>
</body>
</html>