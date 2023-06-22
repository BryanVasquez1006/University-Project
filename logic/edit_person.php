<?php
require '/xampp/htdocs/php-projects/FinalProject-4/University/logic/database.php';

$nombre = $_POST['edit_nombre'];
$correo = $_POST['edit_email'];
$direccion = $_POST['edit_direccion'];
$nacimiento = $_POST['edit_fecha'];
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