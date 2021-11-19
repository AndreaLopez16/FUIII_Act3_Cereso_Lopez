<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados</h1>
		<input type="Id" name="Id" placeholder="Id">
    	<input type="text" name="name" placeholder="Nombre/s">
		<input type="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno">
		<input type="apellido_materno" name="apellido_materno" placeholder="Apellido Materno">
		<input type="edad" name="edad" placeholder="Edad">
    	<input type="submit" name="guardias">
    </form>
        <?php 
        include("guardias.php");
        ?>
</body>
</html>