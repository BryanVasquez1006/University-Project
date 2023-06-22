<?php
require '/xampp/htdocs/php-projects/FinalProject-4/University/logic/database.php';

$dni = $_POST['DNI'];
$nombre = $_POST['name'];
$correo = $_POST['email'];
$direccion = $_POST['address'];
$nacimiento = $_POST['date'];
$id = $_POST['id'];

$sql = "UPDATE maestros SET nombre=?, email=?, direccion=?, fecha=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$nombre, $correo, $direccion, $nacimiento, $id]);

if ($stmt->rowCount() > 0) {
    header("location: ../views/maestros.php");
} else {
    echo "Error al actualizar los datos";
}

?>