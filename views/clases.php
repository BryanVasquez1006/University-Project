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
            <div class="d-flex justify-content-between flex-row align-content-center align-items-center p-3">
                <h3 class="p-3">Lista de Clases</h3>
                <div class="d-flex">
                    <a href="./dashboard.php" class="text-black">Home</a>
                    <p>/</p>
                    <a href="./maestros.php" class="text-black">Maestros</a>
                </div>
            </div>

            <div class="container permisos-container bg-white  m-3 p-3">

                <div class="d-flex justify-content-between border-bottom">
                    <p class="p-3">Informacion de Clases</p>
                    <div class="d-flex flex-column justify-content-center">
                        <input type="button" value="Agregar Clase" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTeacher">
                    </div>
                </div>

                <!-- BUTTONS CONTAINER STARTING HERE -->
                <div class="navigation d-flex justify-content-between mt-5">
                    <div class="buttons-container">
                        <input type="button" class="btn btn-secondary" value="Copy">
                        <input type="button" class="btn btn-secondary" value="Excel">
                        <input type="button" class="btn btn-secondary" value="PDF">
                        <input type="button" class="btn btn-secondary" value="Column-visiblity">
                    </div>
                    <div class="d-flex flex-row align-content-center">
                        <p class="text-center me-1 mt-1">Search</p>
                        <input type="text" class="form-control" placeholder="Search for a class....">
                    </div>
                </div>
                <!-- TABLE CONTENT STARTING HERE -->
                <div class="table table-container mt-5">
                    <table class="table-bordered table-striped ">

                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Clase</th>
                                <th scope="col">Maestro</th>
                                <th scope="col">Alumnos inscritos</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>654654684-4</td>
                                <td><span class="asignment bg-warning p-1 rounded-1 fw-bold">Sin asignación</span></td>
                                <td><span class="asignment bg-warning p-1 rounded-1 fw-bold">Sin Alumnos</span></td>
                                <td class="d-flex">
                                    <a href="#" class="btn btn-secondary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editTeacher">
                                        <i class="fa-solid fa-pen-to-square">

                                        </i>
                                    </a>

                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteTeacher">
                                        <i class="fa-solid fa-trash"></i>


                                    </a>
                                </td>






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
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>aaa</td>
                                <td>Mark</td>





                            </tr>
                        </tbody>
                    </table>


                    <!-- Modal ADD ANOTHER TEACHER -->
                    <div class="modal fade" id="addTeacher" tabindex="-1" aria-labelledby="addTeacher" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addTeacher">Agregar Clase</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>



                                <div class="modal-body">
                                    <form action="./maestro" method="">


                                        <label for="">Nombre Completo</label>
                                        <input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre del maestro...">

                                        <label for="" class="mt-2">Correo Electronico</label>
                                        <input type="email" name="email" class="form-control" placeholder="Ingresa el email...">


                                        <label for="" class="mt-2">Dirección</label>
                                        <input type="text" name="direccion" class="form-control" placeholder="Ingresa el la dirección...">


                                        <label for="" class="mt-2">Fecha de Nacimiento</label>
                                        <input type="date" name="fecha" class="form-control" placeholder="Ingresa la fecha de nacimiento..">


                                        <div class="dropdown mt-3">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Clase
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Administrador</a></li>
                                                <li><a class="dropdown-item" href="#">Maestro</a></li>
                                                <li><a class="dropdown-item" href="#">Estudiante</a></li>
                                            </ul>
                                        </div>



                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <input type="submit" value="Agregar Clase" class="btn btn-primary"></input>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal EDIT TEACHER -->

                    <div class="modal fade" id="editTeacher" tabindex="-1" aria-labelledby="editTeacher" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editTeacher">Editar Clase</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>



                                <div class="modal-body">
                                    <form action="" method="">


                                        <label for="">Nombre Completo</label>
                                        <input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre del maestro...">

                                        <label for="" class="mt-2">Correo Electronico</label>
                                        <input type="email" name="email" class="form-control" placeholder="Ingresa el email...">


                                        <label for="" class="mt-2">Dirección</label>
                                        <input type="text" name="direccion" class="form-control" placeholder="Ingresa el la dirección...">


                                        <label for="" class="mt-2">Fecha de Nacimiento</label>
                                        <input type="date" name="fecha" class="form-control" placeholder="Ingresa la fecha de nacimiento..">


                                        <div class="dropdown mt-3">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Clase
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Administrador</a></li>
                                                <li><a class="dropdown-item" href="#">Maestro</a></li>
                                                <li><a class="dropdown-item" href="#">Estudiante</a></li>
                                            </ul>
                                        </div>



                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <input type="submit" value="Guardar cambios" class="btn btn-primary"></input>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal DELETE ANOTHER TEACHER -->
                    <div class="modal fade" id="deleteTeacher" tabindex="-1" aria-labelledby="deleteTeacher" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteTeacher">Eliminar Maestro</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>



                                <div class="modal-body">
                                    <form action="" method="">


                                        <label for="">Nombre Completo</label>
                                        <input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre del maestro...">

                                        <label for="" class="mt-2">Correo Electronico</label>
                                        <input type="email" name="email" class="form-control" placeholder="Ingresa el email...">


                                        <label for="" class="mt-2">Dirección</label>
                                        <input type="text" name="direccion" class="form-control" placeholder="Ingresa el la dirección...">


                                        <label for="" class="mt-2">Fecha de Nacimiento</label>
                                        <input type="date" name="fecha" class="form-control" placeholder="Ingresa la fecha de nacimiento..">


                                        <div class="dropdown mt-3">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Clase
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Administrador</a></li>
                                                <li><a class="dropdown-item" href="#">Maestro</a></li>
                                                <li><a class="dropdown-item" href="#">Estudiante</a></li>
                                            </ul>
                                        </div>



                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <input type="submit" value="Guardar cambios" class="btn btn-primary"></input>
                                </div>
                            </div>
                        </div>
                    </div>


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