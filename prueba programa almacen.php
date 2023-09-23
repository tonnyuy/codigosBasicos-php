<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<title> Documento</title>
<link rel="stylesheet" href="style/generico.css">
<script src="js/regAlmacen.js"></script>
</head>
<body>
<div class="form-reg">
<h3> Registro nuevo almacen</h3>
<form action="RegAlmacen.php" method="post" enctype="multipart/form-data"
onsumit="return validar();">
<label for="">Descripcion de almacen</label>
<input type="text" name="des_almacen" id="des_almacen">
 <BR>;
<label for=""> Superficie (mts2) </label>
<input type="number" name="superficie" id="superficie">
 <BR>;
<label for=""> Encargado</label>
<input type="text" name="encargado" id="encargado">
 <BR>;
<label for=""> Ubicacion</label>
<imput for="text" name="ubicacion" id="ubicacion">
<label for=""> foto almacen</label>
<imput type="file" name="imagen" id="imagen">
<imput type="submit" value="registrar" onclick="">
<imput type="button" value="Cancelar" onclick="history.back()">
</form>
</div>


</body>
</html>