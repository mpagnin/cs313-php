<?php
// The first thing I have to do is to process all the input
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$comments = htmlspecialchars($_POST["comments"]);
$continents = $_POST["continents"];
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>W03 Group06 Team Activity - Submission Results</title>
        <meta name="description" content="W03 Group06 Team Activity">
    </head>
    <body>
        <h1>W03 Group06 Team Activity - PHP</h1>
        <p>Submission Results</p>
        <p>Name: <?=$name ?></p>
        <p>Email: <?=$email ?></p>
        <?php
        $majorsMap = array("CS"=>"Computer Science", "WDD"=>"Web Design & Development", 
        "CIT"=>"Computer Information Technology", "CE"=>"Computer Engineering");
        ?>
        <p>Major: <?=$major ." - ". $majorsMap[$major]?></p>
        <p>Comments: <?=$comments ?></p>
                <p>Continents visited:</p>
        <ul>
            <?php
            $continentsMap = array("NA"=>"North America", "SA"=>"South America", 
            "EU"=>"Europe", "AS"=>"Asia", "AU"=>"Australia", "AF"=>"Africa", "AN"=>"Antarctica");
            foreach ($continents as $continent){
                $continent_clean = htmlspecialchars($continent);
                echo "<li><p>". $continentsMap[$continent_clean] ."</p></li>";
            }
        ?>
        <ul>
    </body>
</html>
