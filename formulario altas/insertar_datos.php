<?php

//INSERTAR DATOS

//Incluímos las funciones definidas en el otro archivo de php
include '../conexion_y_desconexion_BBDD.php';

$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$dep = $_POST['departamento'];

$enlace = conectar();

$sql = "INSERT INTO prueba1 (Nombre, Apellido, DNI, Email, Departamento) VALUES 
('$nom', '$ape', '$dni', '$email', '$dep');
";
if(mysqli_query($enlace, $sql)){
    echo 'Insertado correctamente.';
?>
    <a href="../index.html"> Volver atras </a>    
<?php
} else{
    echo "Error al insertar datos con la consulta: $sql. " . mysqli_error($enlace);
}

// Cerramos conexión
cerrar_conexion($enlace);
?>