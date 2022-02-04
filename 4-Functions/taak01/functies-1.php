<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Functions with arguments</h1>
<body>

    <?php
        function schrijfKleur($kleur){
            echo "Dit is de kleur $kleur <br>";
        }

        $kleur("<font color='red'>Red");
        $kleur("<font color='blue'>Blue");
        $kleur("<font color='yellow'>Yellow");
        $kleur("<font color='orange'>Orange");


    ?>
</body>
</html>