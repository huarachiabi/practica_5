<!DOCTYPE html>
<?php
$bandera = false;

if (isset($_POST["nombre"]))$bandera = true;

?>
<html lang="es">
<head>
	<meta charset ="utf-8">
	<title></title>
</head>
<body>	<h1>REGISTRO</h1>
	<form action="" method="POST">

<label>nombre</label>
<input type="text" name="nombre" value=""/>
</br>
</br>
<label>apellidos</label>
<input type="txt" name="apellidos" value="">
<br>
<br>
<label>correo</label>
<input type="txt" name="correo" value="">
<br>
<br>
<label>comentario</label>
<input type="txt" name="comentario" value="">
<br>
<br>
<input type="submit"  value="enviar">


	</form>
	<H1>LOS DATOS RECIBIDOS SON:</H1>
		<?php
if($bandera) {echo"<h1>tu nombre es: ".$_POST["nombre"]."</h1>";
echo"<h1>tu apellido es: ".$_POST["apellidos"]."</h1>";
echo"<h1>tu correo : ".$_POST["correo"]."</h1>";
echo"<h1>tu comentario es : ".$_POST["comentario"]."</h1>";}
else{

	echo "<h2>no hay datos existentes</h2>";
}
	?>


</body>
</html>