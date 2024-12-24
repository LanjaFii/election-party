<link rel="stylesheet" href="inscription.css">
<div class="formulaire">
    <fieldset>
    <legend>Hisoratra ao <br>amin'ny <br> lisi-pifidianana</legend>
            <form class="content" action="insert.php" method="post">
                <label for="nom">Anarana:</label>
                <input type="text" id="nom" name="nom" required="required" value="<?php echo $_SESSION['nm']; ?>"><br><br>

                <label for="prenoms">Fanampiny:</label>
                <input type="text" id="prenoms" name="prenoms" required="required" value="<?php echo $_SESSION['pr']; ?>"><br><br>

                <label for="adresse">Adiresy:</label>
                <input type="text" id="adresse" name="adresse" required="required" value="<?php echo $_SESSION['adr']; ?>"><br><br>

                <label for="cin">Laharan'ny karatra:</label>
                <input type="number" id="cin" name="cin" required="required" placeholder="mampidira laharana hafa"><br><br>

                <input class="sinscrire" type="submit" value="Hisoratra">
                <p class="nomme">Efa misy manana ny laharan'ny karatra nampidirinao.</p>
            </form>
    </fieldset>   
</div>
