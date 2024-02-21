<?php
//FUNCIÓN PARA CONECTAR LA BASE DE DATOS
function conectar(){
	$enlace = mysqli_connect("127.0.0.1", "root", "", "prueba");

	if (!$enlace) {
		echo 'Error: No se pudo conectar a la base de datos.<br>';
		echo 'errno de depuración: ' . mysqli_connect_errno() . '<br>';
		echo 'error de depuración: ' . mysqli_connect_error() . '<br>';
		exit;
	}

	//echo 'Conexión establecida <br>';
	//echo 'Información del host: ' . mysqli_get_host_info($enlace) . '<br>';

	//mysqli_close($enlace);
	return $enlace;
}

//FUNCIÓN PARA CERRAR CONEXIÓN A LA BASE DE DATOS
//ARGUMENTO NECESARIO: Enlace a la base de datos

function cerrar_conexion($enlace){
	
	mysqli_close($enlace);
	
}
?>

<?php
//Prueba
//$enlace = conectar();
//cerrar_conexion($enlace);
?>