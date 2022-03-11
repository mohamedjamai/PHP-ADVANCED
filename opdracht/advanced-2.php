<body style="background-color:<?php echo $_POST['achtergrondkleur']; ?>; border-radius:<?php echo $_POST['borderline']; ?>; color:<?php echo $_POST['tesktkleur1']; ?>">
<style>
table, th, td {
  border: 1px solid white;
}
    </style>
    <?php
    $persoonlijkeArray = array(
        "Naam" => "Mohamed",
        "achternaam" => "Jamai",
        "Leeftijd" => "17",
        "Woonplaats" => "Amsterdam",
        "Geboortedatum" => "12 Oktober 2004",
    );
    echo "<table>";
    foreach ($persoonlijkeArray as $key => $value) {
        maakRij($key, $value);
    }
    echo "</table>";

    function maakRij($key, $value)
    {
        echo "<tr>";
        echo "<td> $key </td>";
        echo "<td> $value </td>";
        echo "</tr>";
    }

    ?>