<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CSS de AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <!-- Fuentes y Estilos personalizados -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/stylesheet/dashboard.css">
    <link rel="stylesheet" href="/stylesheet/permisos.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
    <script src="https://kit.fontawesome.com/e5df6cb411.js" crossorigin="anonymous"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <!-- ... Aquí va el formulario de búsqueda ... -->
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuario <!-- aca va el el nombre del que a iniciado sesion -->
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#">FAQ</a>
                        <a class="dropdown-item" href="#">Support</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Contact</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="https://logos-world.net/wp-content/uploads/2021/08/BYU-Emblem.png" alt="BYU University Logo" class="ms-0 bg-white brand-image  elevation-3" style="opacity: .8 ">
                <span class="brand-text font-weight-light">Universidad</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <h5 style="color: #c2c7d0">admin</h5>
                        <a href="#" class="d-block">Administrador</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-header text-center text-uppercase">MENU DE ADMINISTRACIÓN</li>
                        <li class="nav-item">
                            <a href="./permisos.php" class="nav-link">
                            <i class="fa-solid fa-user-gear"></i>
                                <p class="ml-2">Permisos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./maestros.php" class="nav-link ">
                            <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
                                <p class="ml-2">Maestros</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./alumnos.php" class="nav-link ">
                            <i class="fa-solid fa-graduation-cap"></i>
                                <p class="ml-2">Alumnos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./clases.php" class="nav-link ">
                            <i class="fa-solid fa-chalkboard"></i>
                                <p class="ml-2">Clases</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        










        <!-- /.main-sidebar -->

        <!-- Contenido principal -->
        <div class="content-wrapper d-flex flex-column justify-content-start ">
            <div class="container permisos-container bg-white  m-3 p-3">
                <h3>Lista de Permisos</h3>
                <p>Informacion de Permisos</p>

                 <!-- BUTTONS CONTAINER STARTING HERE -->
                <div class="buttons-container">
                    <input type="button" class="btn btn-secondary" value="Copy">
                    <input type="button" class="btn btn-secondary" value="Excel">
                    <input type="button" class="btn btn-secondary" value="PDF">
                    <input type="button" class="btn btn-secondary" value="Column-visiblity">
                </div>
                    <!-- TABLE CONTENT STARTING HERE -->
                <div class="table-container mt-5">
                    <table class="table table-striped table-bordered">
                 
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email / Usuario</th>
                                <th scope="col">Permiso</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>


                                <td><span class="permiso rounded-1">Maestro</span></td>
                                <td><span class="status rounded-1">Activo</span></td>
                                <td><a href="#" class="btn btn-secondary btn-sm"><i class="fa-solid fa-pen-to-square"></a></i></td>



                              
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>Aprobado</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td>aaa</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <footer class="main-footer">
            <!-- ... Aquí va el contenido del footer ... -->
        </footer>
        <!-- /.footer -->
    </div>
    <!-- /.wrapper -->
</body>

</html>