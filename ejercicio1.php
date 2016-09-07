<html>
<head lang ="es">
<meta charset="utf-8" />
	<title>ejercicio_1</title>
</head>
<body>
<h1>TABLA DE 10 X 10 DEL 1 AL 100 </h1>
<table border="1">
<?php
$a=1;
for($j=1; $j<=10;$j++)
	{
?>
	<tr>
       
	<?php
	for($i=1; $i<=10;$i++)
	{
		echo "<td>$a</td>";
       
       $a=$a+1;
	}
	?>

</tr>
<?php

 }
 ?>	

</table>
</body>
</html>