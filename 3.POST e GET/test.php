<!DOCTYPE html>
<html>
<head>
	<title>Ola</title>
	<style>
		span.texto{
			font-size: <?php echo $tam;?>;
			color:<?php echo $cor ?>;
		}
	</style>
	<?php

	$txt = ($_GET['t']);
	$tam = ($_GET['tam']);
	$cor = ($_GET['cor']);
	
?>
</head>
<body>
	<?php  
	var_dump($_GET);
	?>
</body>
</html>