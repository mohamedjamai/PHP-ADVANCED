<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Jouw gegevens!</h1>
        <?php
        
        switch ($_POST["colors"]) {
          case "4":
            echo '<body style="background-color: yellow;">';
            break;
          case "2":
              echo '<body style="background-color: red;">';
            break;
          case "3":
              echo '<body style="background-color: blue;">';
            break;
            case "1":
              echo '<body style="background-color: green;">';
            break;
            case "5":
              echo '<body>';
            break;
          default:
            echo "<body>";
        }

        echo  "Voornaam is ". $_POST["fname"] ,"<br>"; 
        echo "Achteraam is ". $_POST["achternaam"] , "<br>"; 
        echo "Jouw klas is ". $_POST["klas"] , "<br>"; 
        echo "Jouw leeftijd is ". $_POST["leeftijd"] , "<br>"; 
        echo "Jouw adress is ". $_POST["adres"] , "<br>"; 
        echo "Jouw woonplaats is ". $_POST["woonplaats"] , "<br>"; 
        echo "Jouw lievelings muziekband is ". $_POST["Muziekband"] , "<br>"; 
        echo "Jouw geslacht is ". $_POST["sex"] , "<br>"; 
        
        ?>
        



</body>
</html>



