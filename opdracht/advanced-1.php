<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
</head>
<body>

<body style="background-color:<?php echo $_POST['kleur']; ?>">
    <fieldset>
            <form action = "advanced-2.php" method="post">
            <label for="fname">Tekstkleur</label>
                    <select name="tesktkleur1"> 
                        <?php 
                            $kleuren = array("red", "blue", "green", "black", "brown");
                        foreach ( $kleuren as $kleur){
                            echo "<option value = $kleur > $kleur </option>";
                        }?>
                        </select>
                        
                        <br>
                    
                        <label for="fname">Backgroundcolor</label>
                        <select name="achtergrondkleur">
                        <?php 
                            $achtergronden = array("red", "blue", "green", "black", "brown");
                        foreach ( $achtergronden as $achtergrond){
                            echo "<option value = $achtergrond > $achtergrond </option>";
                        }?> 
                    </select>
                    <br>
                        <label for="lname">Bordertext </label>
                        <input type="text" name="borderline">
                    <br>
                    <input type="submit" value="Submit"> 
                   
            </form>
    </fieldset>
    
</body>
</html>
