<?php

//INSERTAR DATOS

//Incluímos las funciones definidas en el otro archivo de php
include '../conexion_y_desconexion_BBDD.php';

$enlace = conectar();

$sql = "INSERT INTO prueba1 (Nombre, Apellido, DNI, Email, Departamento) VALUES 
('Iker','Canabal','58030392w','iker.canabal@ikasle.egibide.org','almendra');
";
if(mysqli_query($enlace, $sql)){
    echo 'Insertado correctamente.';
} else{
    echo "Error al insertar datos con la consulta: $sql. " . mysqli_error($enlace);
}

// Cerramos conexión
cerrar_conexion($enlace);
?>