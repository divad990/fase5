<?php

function mostrar_datos(){
	//Incluímos las funciones definidas en el otro archivo de php
	include '../conexion_y_desconexion_BBDD.php';
	
	$enlace = conectar();
	//Procedemos a realizar una consulta
	$sql = "SELECT * FROM prueba1";
	if($resultado = mysqli_query($enlace, $sql)){
		if(mysqli_num_rows($resultado) > 0){
			echo '<table border="1" cellpadding="3">';
			echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Nombre</th>";
			echo "<th>Apellido</th>";
			echo "<th>Email</th>";
			echo "<th>Departamento</th>";
			echo "</tr>";
        
			while($row = mysqli_fetch_array($resultado)){
				echo "<tr>";
				echo "<td>" . $row['ID'] . "</td>";
				echo "<td>" . $row['Nombre'] . "</td>";
				echo "<td>" . $row['Apellido'] . "</td>";
				echo "<td>" . $row['Email'] . "</td>";
				echo "<td>" . $row['Departamento'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			
			//Liberar memoria (opcional)
			mysqli_free_result($resultado);
    } else{
        echo "No se encontraron datos";
		}
	}
	
	// Cerramos conexión
	cerrar_conexion($enlace);
	
	echo '<br><hr><br>';
	echo '<a href="https://localhost/aw/bbdd"> Volver atrás </a>';
}

?>

<?php
//Probamos la función
mostrar_datos();
?>