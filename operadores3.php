<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
$num1 = 5;
$num2= 10;
$num3 = 5;
$num4= 20;
$num5 = 5;
$activo1= true;
$activo2= false;

if ($num1 == $num3 && $num3 == $num5){   // && o and 
echo "iguales";
echo "<br>";
}

if ($num1 == $num3 xor $num3 == $num5){  
echo "iguales";
echo "<br>";
}

if ($activo1){   // me salta porque activo1 vale TRUE, para negar seria !$activo1
echo "dentro";
echo "<br>";
}


?>
</body>
</html>