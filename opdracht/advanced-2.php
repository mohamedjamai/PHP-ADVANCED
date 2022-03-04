<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
</head>
<body style="background-color:<?php echo $_POST['achtergrondkleur']; ?>; border-radius:<?php echo $_POST['borderline']; ?>; color:<?php echo $_POST['tesktkleur1'];?>">
    <fieldset>
            <form name id="invoerformulier" action = "advanced-1.php" method="post">
                    <table border=1>
                        <?php
                            $persoonlijkeArray = array(
                            "Naam" => "Mohamed",
                            "achternaam" => "Jamai",
                            "Leeftijd" => "17",
                            "Woonplaats" => "Amsterdam",
                            "Geboortedatum" => "12 Oktober 2004",

                        );
                        
                        foreach ($persoonlijkeArray as $key => $value) {
                            echo "<tr>";
                            echo "<td> $key </td>";
                            echo "<td> $value </td>";
                            echo "</tr>";
                        };
                      
                        
                            ?>
                    </table>
                   
            </form>
    </fieldset>
    
</body>
</html>
