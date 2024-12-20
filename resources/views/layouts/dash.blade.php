@vite(['resources/js/bootstrap.js'])

@vite(['resources/css/sb-admin-2.css'])
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <title>Dashboard</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MultiFarma<sup></sup></div>
            </a>

           <!-- Divider -->
           <hr class="sidebar-divider my-0">
            @role('admin')
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('usuarios.no.aprobados') }}">
                    <i class="fas fa-users"></i>
                    <span>Usuarios No Aprobados</span>
                </a>
            </li>
            @endrole

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dash2">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Tablas</div>

            <li class="nav-item">
                <a class="nav-link" href="/home/products">
                    <i class="bx bxs-user"></i>
                    <span>Products</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/home/marcas">
                    <i class="fa fa-tshirt"></i>
                    <span>Marcas</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/home/categorias">
                    <i class="bx bx-grid-alt"></i>
                    <span>Categorias</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/home/tipo_ropas">
                    <i class="bx bx-user"></i>
                    <span>Tipo ropa</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/home/empresas">
                    <i class='bx bxs-pin'></i>
                    <span>Empresas</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/home/puestos">
                    <i class='bx bxs-cart'></i>
                    <span>Puestos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/home/tallas">
                    <i class='bx bx-ruler'></i>
                    <span>Tallas</span>
                </a>
            </li>

            <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link" href="/home/productos">
                    <i class='bx bx-box'></i>
                    <span>Productos</span>
                </a>
            </li>


            <li class="nav-item">

                <a class="nav-link" href="/admin/ventas">
                    <i class="bx bx-shopping-bag"></i>
                    <span>Ventas</span>
=======
            <a class="nav-link dropdown-toggle" href="#" id="usuariosDropdown" data-bs-toggle="collapse" data-bs-target="#usuariosSubmenu" aria-expanded="false" aria-controls="usuariosSubmenu">
                <i class="bx bx-user"></i>
                <span>Usuarios</span>
            </a>
            <ul class="collapse" id="usuariosSubmenu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('usuarios.admin') }}">
                <span>Administrador</span>
>>>>>>> d2205a17ca229b2f672ec30a525f188aff5d05de
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('usuarios.cliente') }}">
                <span>Cliente</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('usuarios.empleado') }}">
                <span>Empleado</span>
                </a>
            </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('usuarios.proveedor') }}">
                <span>Proveedores</span>
                </a>
            </li>
            </ul>
        </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/inventario">
                    <i class="bx bx-box"></i>
                    <span>Inventario</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/tipos">
                    <i class="fas fa-tags"></i>
                    <span>Tipos</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="bx bx-log-out"></i>
                    <span>Home</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                @yield('content')


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>
</html>
