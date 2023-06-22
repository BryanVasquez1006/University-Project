<?php
 $conn = new PDO("mysql:host=$host;dbname=$database",$user,$password);
if (!empty($_POST["addCambios"]))
        if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['direccion']) && !empty($_POST['fecha'])) {

            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $direccion = $_POST['direccion'];
            $fecha = $_POST['fecha'];
            


            $sql = $conn->query("INSERT INTO maestros(nombre, email, direccion, fecha, asignacion) VALUES ('$nombre', '$email', '$direccion', '$fecha', '')");
            ;
            if ($sql === false) {
                // Error al ejecutar la consulta, muestra el mensaje de error
                $errorInfo = $conn->errorInfo();
                echo '<div class="alert alert-danger">Error: ' . $errorInfo[2] . '</div>';
            } else {
                echo '<div class="alert alert-success">Maestro registrado correctamente</div>';
            }



        } else {
            
            echo '<div class = "alert alert-warning">UNO DE LOS CAMPOS ESTA VACIOe</div>';
        }
        
?>