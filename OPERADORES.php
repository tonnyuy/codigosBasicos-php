<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

//OPERADORES 
$num1 = 5;
$num2 =10;

echo  $num1 + $num2;

echo "<br>";

// o usar este tipo : ECHO $num1 + $num2,

echo $num1 . "x" . $num2 . "=" . $num1 * $num2;
echo "<br>";

echo $num1 . "/" . $num2 . "=" . $num2 % $num1;

echo "<br>";
echo $num1 . " elevado a " . $num2 . "=" . $num1 ** $num2;

$num3=5;
$num4=10;
$num5=0;

$num5= $num3;
echo $num5;
echo "<br>";
echo $num3 . " += " . $num4 . " => " . $num3+=$num4;
echo "<br>";
echo $num3 . " *= " . $num4 . " => " . $num3*=$num4;
echo "<br>";
echo $num3 . " %= " . $num4 . " => " . $num3%=$num4;




?>
</body>
</html>