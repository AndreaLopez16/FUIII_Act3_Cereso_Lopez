<?php 

include("con_db.php");

if (isset($_POST['guardias'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['name']) >= 1) {
	    $name = trim($_POST['name']);
	    $apellido_paterno = trim($_POST['apellido_paterno']);
		$apellido_materno = trim($_POST['apellido_materno']);
	    $edad = trim($_POST['edad']);
	    $consulta = "INSERT INTO guardias(nombre, apellido_paterno, apellido_materno, edad) VALUES ('$name','$apellido_paterno','$apellido_materno','$edad')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>