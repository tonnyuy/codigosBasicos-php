<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

// OPERADORES
//         ==     igual igual
//       ===      si es identico y del mismo tipo (integer, string,..)
//   !=   o   <>      si son distintos 
// !=== no son identicos 
// <= o >= mayor igual o menor igual 
$num1 = 5;
$num2 =10;
$num3 = 5;
$valor1 = "5";

if($num1 == $num2) {
	echo " num1 y num2 son iguales";
	echo "<br>";
}

if($num1 == $num3) {
	echo " num1 y num3 son iguales";
	echo "<br>";
}

if($num1 == $valor1) {
	echo " num1 y valor1 son iguales";
	echo "<br>";
}

if($num1 !== $valor1) {
	echo " num1 y valor1 no son identicos";
	echo "<br>";
}

if($num1 != $num2) {
	echo " num1 y num2 son distintos";
	echo "<br>";
}

if($num1 <> $num2) {
	echo " num1 y num2 son distintos";
	echo "<br>";
}
if($num1 < $num2) {
	echo " num1 es menor num2 ";
	echo "<br>";
}

?>
</body>
</html>