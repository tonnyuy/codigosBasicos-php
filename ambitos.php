<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
//ambito
$numero =22; 
function prueba()  {
	global $numero;
	echo $numero;
}
	prueba();

?>
</body>
</html>