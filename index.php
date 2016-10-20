<?php 
	require_once('inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<nav>
		<a href="<?php echo $path?>">Español</a>
		<a href="<?php echo $path?>en/">English</a>
	</nav>
	<h1><?php echo _("Traducciones con Gettext") ?></h1>
	<p><?php echo _("Código básico para empezar un proyecto con gettext") ?></p>
</body>
</html>