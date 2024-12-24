<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projet.css">
    <title>PROJET</title>
</head>
<body>
    <?php
        include("header.php");
    ?>
<div class="contenu">
    <?php
        $projet= $_GET["id"];
        include($projet.".php");
    ?>    
</div>
    <?php    
        include("footer.php");
    ?>
</body>
</html>