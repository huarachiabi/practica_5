<html>
<head lang ="es">
<meta charset="utf-8" />
	<title>ejercicio_3</title>
	
</head>
<body>
<h1>TABLA DE AJEDREZ </h1>
<table border="1">
<?php
define("n", "10");
$a=1;
$sw=0;

for($j=1; $j<=n;$j++)
	{
		
?>
       <tr>
	<?php

	for($i=1; $i<=n;$i++)
	{
		if($sw==0)
		{
		if($i%2==0)
		{
		echo "<td bgcolor='white'>$a</td>";
		}else
		{
		echo "<td bgcolor='black'>$a</td>";

		}
		}else{
			if($i%2==0)
		{
		echo "<td bgcolor='black'>$a</td>";
		
		}else
		{
		echo "<td bgcolor='white'>$a</td>";

		}
		}
       $a=$a+1;
	}
	if($sw==0)
	{
		$sw=1;

	}else{
		$sw=0;
	}
	?>
</tr>
<?php

 }
 ?>	

</table>
</body>
</html>