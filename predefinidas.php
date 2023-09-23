<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
$numero=33;
echo "el nombre del servior: " . $_SERVER['SERVER_NAME'];
ECHO "<BR>";
echo "el SOFTWARE del servior:"  . $_SERVER['SERVER_SOFTWARE'];
ECHO "<BR>";
echo "PUERTO del servior: " . $_SERVER['SERVER_PORT'];
echo "<br>";
ECHO "LA VARIABLE DEL NUMERO VALE: " . $GLOBALS['numero'];
// tambien se puede llamar a una variable de esta manera  ECHO "LA VARIABLE DEL NUMERO VALE: " . $GLOBALS['numero'];
?>
</body>
</html>