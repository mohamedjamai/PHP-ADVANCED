

<body style="background-color:<?php echo $_POST['achtergrondkleur']; ?>; border-radius:<?php echo $_POST['borderline']; ?>; color:<?php echo $_POST['tesktkleur1'];?>">

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
                    