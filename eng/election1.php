<link rel="stylesheet" href="election.css">

            <form action="elir.php" method="post">
                <div class="cont">
                    <div class="left">
                        <label for="cin">IC Number</label>
        <p>
            <input required="required" type="number" id="cin" name="cin">
        </p>
        
                        <label for="candidat">CANDIDATE</label>
        <p>
            <select required="required" name="candidat">
                <option value="" class="candix">Choose a candidate</option>
                <option value="hery">RAJAONARIMAMPIANINA Hery</option>
                <option value="ravalo">RAVALOMANANA Marc</option>
                <option value="andry">ANDRY RAJOELINA</option>
            </select>
        </p>
        <p class="nommi">The IC number you entred is not in the list.  <p>
        
                    </div>
                    <div class="right">
                    </div>
    <p class="tondro">👉</p>
        <input class="elir" type="submit" value="VOTE">
                </div>
            </form>


