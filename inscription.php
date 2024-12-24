<link rel="stylesheet" href="inscription.css">
<div class="formulaire">

            <fieldset>
        <legend>Inscription <br>a la liste<br> électoral</legend>
            <form class="content" action="insert.php" method="post">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required="required"><br><br>

                <label for="prenoms">Prénoms:</label>
                <input type="text" id="prenoms" name="prenoms" required="required"><br><br>

                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" required="required"><br><br>

                <label for="cin">Numero CIN:</label>
                <input type="number" id="cin" name="cin" required="required"><br><br>

                <input class="sinscrire" type="submit" value="S'inscrire">
            </form>
    </fieldset>
    
    
</div>