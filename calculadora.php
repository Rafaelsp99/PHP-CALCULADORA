<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
</body>
</html>
<?php
$x = $_GET["num1"];
$y = $_GET["num2"];
$op = $_GET["operacao"];

if($op=="soma")
    $z = $x + $y;
elseif($op=="subtracao")
    $z = $x - $y;

elseif($op=="multiplicacao")
    $z = $x*$y;

elseif($op=="divisao")
    $z = $x/$y;


else
    $z = $x/$y;
echo "O resultado é: $z";
?>