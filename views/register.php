<?php

require '/xampp/htdocs/php-projects/FinalProject-4/University/logic/database.php';

// $message = isset($message) ? $message : '';

if (!empty($_POST['dui']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['direccion']) && !empty($_POST['fecha']) && !empty($_POST['contraseña'])) {

    $sql = "INSERT INTO users (dui, nombre, email, direccion, fecha, contraseña) VALUES (:dui, :name, :email, :direccion, :fecha, :password)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':dui', $_POST['dui']);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':direccion', $_POST['direccion']);
    $stmt->bindParam(':fecha', $_POST['fecha']);
    $password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Sucessfully create new user';
    } else {
        $message = 'Sorry, there must have been an issue creating your account';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../stylesheet/index.css">
    <title>Document</title>
</head>

<body>

    <div class="form-container container">

        <div class="container d-flex justify-content-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Brigham_Young_University%E2%80%93Idaho_logo.svg/2560px-Brigham_Young_University%E2%80%93Idaho_logo.svg.png" alt="UniversityLogo" class="main-logo">
        </div>

        <div class="container form-bg rounded-3 p-3 mt-5">
            <?php
            if (!empty($message)) : ?>
                <p><?= $message ?></p>
            <?php endif; ?>


            <form action="./register.php" method="post" name="register">
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Numero de DUI</label>
                        <input type="number" class="form-control" name="dui" pattern="[0-9]+\-?[0-9]+">

                    </div>
                    <label for="exampleInputEmail1" class="form-label">Nombre completo:</label>
                    <input type="text" class="form-control" name="name">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address:</label>
                    <input type="email" class="form-control" name="email" aria-describedby="email">
                    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Direccion de residencia:</label>
                    <input type="text" class="form-control" name="direccion">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="contraseña">
                </div>



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha">

                </div>

                <div class="mb-3 form-check">

                    <a href="./login.php">Login</a>
                </div>
                <input type="submit" class="btn btn-primary" value="Register"></input>


                <?php
                if (!empty($errors)) {
                    echo $errors;
                }
                ?>
            </form>

        </div>

        <div class="access-info">
            <p>Access Information:</p>
        </div>

    </div>

</body>

</html>