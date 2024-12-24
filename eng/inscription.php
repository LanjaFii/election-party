<link rel="stylesheet" href="inscription.css">
<div class="formulaire">

            <fieldset>
        <legend>Inscription <br>to the <br>voters list </legend>
            <form class="content" action="insert.php" method="post">
                <label for="nom">Name:</label>
                <input type="text" id="nom" name="nom" required="required"><br><br>

                <label for="prenoms">First name:</label>
                <input type="text" id="prenoms" name="prenoms" required="required"><br><br>

                <label for="adresse">Adress:</label>
                <input type="text" id="adresse" name="adresse" required="required"><br><br>

                <label for="cin">Number of IC:</label>
                <input type="number" id="cin" name="cin" required="required"><br><br>

                <input class="sinscrire" type="submit" value="Inscription">
            </form>
    </fieldset>
    
    
</div>