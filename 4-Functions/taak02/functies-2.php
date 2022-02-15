<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions excerise 2</title>
</head>
    <h1>Reken wonder</h1>
<body>
<?php 
function rekenWonder($input1, $input2, $input3){
  $antwoord = $input1 + $input2 + $input3;
  return $antwoord;
}

echo "Als ik de getallen 4,2, 9 bij elkaar optel, is de uitkomst 14" . $antwoord1 = rekenWonder(4,2,9). "<br>";
echo "Als ik de getallen 1,2,3 bij elkaar optel, is de uitkomst 14" . $antwoord2 = rekenWonder(1,2,3). "<br>";
echo "Als ik de getallen 40,29,91 bij elkaar optel, is de uitkomst 14" . $antwoord3 = rekenWonder(40,29,91). "<br>";

?>
</body>
</html>
