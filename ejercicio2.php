<html>
<head lang ="es">
<meta charset="utf-8" />
	<title>ejercicio_2</title>
	
</head>
<body>
<h1>TABLA DE 10 X 10 DEL 1 AL 100 </h1>
<table border="1">
<?php
define("n", "10");
$a=1;
for($j=1; $j<=n;$j++)
	{
		if($j%2==0)
		{
		echo "<tr bgcolor='white'>";
		}else
		{
		echo "<tr bgcolor='yellow'>";

		}
?>
       
	<?php

	for($i=1; $i<=n;$i++)
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