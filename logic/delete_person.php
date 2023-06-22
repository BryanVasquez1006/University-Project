<?php
require '/xampp/htdocs/php-projects/FinalProject-4/University/logic/database.php';

$Id = $_GET['id'];
$sql = "DELETE FROM maestros WHERE id = :id";

$query = $conn->prepare($sql);
$query->bindParam(':id', $Id);
$query->execute();

if($query->rowCount() > 0){
    header("location: ../views/maestros.php");
} else {
    echo "No se pudo eliminar";
}
?>