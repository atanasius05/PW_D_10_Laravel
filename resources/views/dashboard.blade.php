<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

</head>
<style>
    body {
        background-color: whitesmoke;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.02);
    }


    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }

    @media (max-width: 991.98px) {
        .sidebar {
            position: fixed;
            width: 250px;
            top: 0;
            left: -250px;
            height: 100%;
            z-index: 1030;
            background-color: #fff;
            transition: all 0.3s ease;
        }

        .sidebar.show {
            left: 0;
        }

        main {
            margin-left: 0;
        }
    }

    @media (min-width: 992px) {
        .sidebar {
            width: 240px;
            height: 100vh;
            left: 0;
        }

        main {
            margin-left: 0px;
        }
    }

    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        background-color: #009970;
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .main-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 10px;
        text-align: center;
    }

    .pt-10 {
        padding-top: 4rem !important;
    }

    .pb-21 {
        padding-bottom: 9.5rem !important;
    }

    .mt-n22 {
        margin-top: -8rem !important;
    }
</style>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="{{ url('admin/main') }}" class="list-group-item list-group-item-action py-2 "
                        id="dashboard-menu">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                    </a>
                    <a href="{{ url('admin/kelas') }}" class="list-group-item list-group-item-action py-2"
                        id="kelas-menu">
                        <i class="fas fa-school fa-fw me-3"></i><span>Kelas</span>
                    </a>
                    <a href="{{ url('admin/guru') }}" class="list-group-item list-group-item-action py-2"
                        id="guru-menu">
                        <i class="fas fa-user-tie fa-fw me-3"></i><span>Guru</span>
                    </a>
                    <a href="{{ url('admin/murid') }}" class="list-group-item list-group-item-action py-2"
                        id="users-menu">
                        <i class="fas fa-users fa-fw me-3"></i><span>Murid</span>
                    </a>
                    <!-- <a href="#" class="list-group-item list-group-item-action py-2" id="ppdb-menu">
                        <i class="fas fa-id-card fa-fw me-3"></i><span>PPDB</span>
                    </a> -->

                </div>
            </div>
        </nav>

        <!-- Toggle button for smaller screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/logo.png')}}" height="30" alt="" loading="lazy" />
                </a>
                <span class="navbar-brand mb-0 h1"><strong>Dashboard</strong></span>

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">

                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-dropdown-init aria-expanded="false">
                            <img src="{{asset('images/Photo2.jpg')}}" class="rounded-circle" height="25" alt=""
                                loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('profileadmin') }}">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="{{ url('loginpage') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <div class="content-wrapper">
        @yield('contentmain')
        @yield('contentkelas')
        @yield('contentguru')
        @yield('contentmurid')
    </div>
    <!--Main layout-->

    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
</body>

</html>