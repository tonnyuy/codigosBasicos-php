<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

//ARRAYS ASOCIATIVOS
$exploradores = array("explorador1" => "chrome", "explorador2"=>"opera", "explorador3"=>"firefox");

$datos = array("nombre"=>"antonny","edad"=>"26","profesor"=> true, 3=>100);

echo "explorador3: " . $exploradores["explorador3"];
echo "<br>";
echo "nombre" . $datos["nombre"];
echo "<br>";
echo "3:" . $datos[3];
var_dump($exploradores);
echo "<br>";
var_dump($datos);
?>
</body>
</html>