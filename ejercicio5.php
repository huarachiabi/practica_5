<html>
<head lang ="es">
<meta charset="utf-8" />
	<title>ejercicio_5</title>
	
</head>
<body>
<h1>IMAGENES EN 4 COLUMNAS </h1>
<?php
$ruta = "fotos//"; // Indicar ruta
 $filehandle = opendir($ruta); // 
 ?>
 <table border="1" align="center">
 <tr>
  <?php
  $contar=1;
  $num=1;
  $cua=4;
  while ($file = readdir($filehandle)) {

   if ($file != "." && $file != "..") {
    $tamanyo = GetImageSize($ruta . $file);
            echo "<td>";
            ?>
            <a href="<?php echo $ruta.$file ?>" target="_blank">
            <img src="<?php echo $ruta.$file ?>" width="100px"></a>    
            <?php
            echo "</td>";
            if($contar<$cua)
            {
            	;
            }
            else{
            	 echo "</tr><tr>";
            	 $num++;
            	 $cua=4;
            	 $cua=$cua*$num;
            }
             $contar++;
   }
    

  
  } 

closedir($filehandle); // Fin lectura archivos

?>

</table>

</body>
</html>