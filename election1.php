<link rel="stylesheet" href="election.css">


            <form action="elir.php" method="post">
                <div class="cont">
                    <div class="left">
                        <label for="cin">Numero CIN</label>
        <p>
            <input required="required" type="number" id="cin" name="cin">
        </p>
        
                        <label for="candidat">CANDIDAT</label>
        <p>
            <select required="required" name="candidat">
                <option value="" class="candix">Choisissez un candidat</option>
                <option value="hery">RAJAONARIMAMPIANINA Hery</option>
                <option value="ravalo">RAVALOMANANA Marc</option>
                <option value="andry">ANDRY RAJOELINA</option>
            </select>
        </p>
        <p class="nommi">Le numero CIN que vous avez utilisé pour voter n'existe pas encore dans la base de 
        donnée... etes-vous sur d'etre inscrit dans la liste? <p>
        
                    </div>
                    <div class="right">
                    </div>
    <p class="tondro">👉</p>
        <input class="elir" type="submit" value="VOTER">
                </div>
            </form>
        



