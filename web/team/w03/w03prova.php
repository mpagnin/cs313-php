<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>W03 Group06 Team Activity</title>
        <meta name="description" content="W03 Group06 Team Activity">
    </head>
    <body>
        <main>
            <h1>W03 Group06 Team Activity</h1>

            <form method="post" action="w03test.php">

            <label for="name">Name</label><br>
                <input type="text" id="name" name="name" title="Enter your name" required><br><br>

            <label for="email">Email</label><br>
                <input type="email" id="email" name="email" title="Enter your email" required><br><br>
            <?php
                $majors = array("CS"=>"Computer Science", "WDD"=>"Web Design & Development", 
                "CIT"=>"Computer Information Technology", "CE"=>"Computer Engineering");

            ?>
            <label for="major">Major</label><br>
            <?php
                foreach ($majors as $major => $major_value) {
                    echo "<input type='radio' id='major' name='major' value='$major' title='Choose your major'>$major $major_value<br>";
                }
                ?>
            <br>
            <label for="comments">Comments</label><br>
                <textarea id="comments" name="comments" rows="5" cols="40" title="Enter your comments"></textarea><br><br>

            <?php
                
                $continents = array("NA"=>"North America", "SA"=>"South America", 
                "EU"=>"Europe", "AS"=>"Asia", "AU"=>"Australia", "AF"=>"Africa", "AN"=>"Antarctica");

            ?>
            <label for="continents">Continents visited</label><br>
            <?php
                foreach ($continents as $continent => $continent_value) {
                    echo "<input type='checkbox' id='continents' name='continents[]' value='$continent' title='Check the continents you visited'>$continent $continent_value<br>";
                }
            ?>

                <!--<input type="checkbox" id="continents" name="continents[]" value="North America">North America<br>
                <input type="checkbox" id="continents" name="continents[]" value="South America">South America<br>
                <input type="checkbox" id="continents" name="continents[]" value="Europe">Europe<br>
                <input type="checkbox" id="continents" name="continents[]" value="Asia">Asia<br>
                <input type="checkbox" id="continents" name="continents[]" value="Australia">Australia<br>
                <input type="checkbox" id="continents" name="continents[]" value="Africa">Africa<br>
                <input type="checkbox" id="continents" name="continents[]" value="Antarctica">Antarctica<br>-->
            <br>
            <label>&nbsp;</label>
            <input type="submit" value="submit" title="Submit your choices.">
            </form>
        </main>
    </body>
</html>