
<?php
session_start();

require '/xampp/htdocs/php-projects/FinalProject-4/University/logic/database.php';

if(!empty($_POST['email']) && !empty($_POST['contraseña'])) {


    $records = $conn->prepare('SELECT id, email, contraseña FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';

    if(is_array($results) && count($results)> 0 && password_verify($_POST['contraseña'], $results['contraseña'])) {

        $_SESSION['user_id'] = $results['id'];
        header('Location: ' . dirname($_SERVER['PHP_SELF']) . '/dashboard.php');
    exit(); // Agrega esta línea para asegurarte de que el script se detenga después de la redirección

    }else{
        $message = "Lo sentimos, las credenciales no coinciden con un usuario existente.";
    }

   

    if ($records->errorCode() != '00000') {
        $errorInfo = $records->errorInfo();
        echo 'Error: ' . $errorInfo[2];
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
                
                if (!empty($message)) :?>
                    <p><?= $message ?></p>
                <?php endif; ?>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="contraseña">
                </div>
                <div class="mb-3 form-check">
                   
                    <a href="./register.php">Register</a>
                </div>
                <input type="submit" class="btn btn-primary" value="Login"></input>

                <?php if (!empty($errores)) {
                    echo $errores;
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