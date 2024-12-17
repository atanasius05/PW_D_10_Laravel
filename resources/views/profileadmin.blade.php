<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
</head>

<style>
    body {
        background-color: whitesmoke;
    }

    .profile-container {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .profile-section {
        width: 100%;
        max-width: 900px;
    }

    .profile-header-card {
        text-align: center;
        margin-bottom: 20px;
    }

    .profile-header-card h5 {
        margin: 0;
        padding: 10px;
        background-color: #f8f9fa;
        border-radius: 8px;
    }

    #profile-picture {
        border: 2px solid #ddd;
        padding: 5px;
        width: 150px;
        height: 150px;
    }

    .text-left {
        text-align: left;
    }

    .centered {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    /* Card Alignment */
    .card {
        margin-bottom: 20px;
    }

    .card-body {
        text-align: left;
    }

    /* Responsive */
    @media (min-width: 991.98px) {
        .main-content {
            padding-left: 240px;
        }
    }

    @media (max-width: 991.98px) {
        .sidebar {
            left: -250px;
        }

        .sidebar.show {
            left: 0;
        }
    }

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        width: 240px;
        background-color: white;
    }

    /* Profile Picture */
    #profile-picture {
        border: 2px solid #ddd;
        padding: 5px;
    }

    /* Custom input styles */
    input[type="file"] {
        cursor: pointer;
    }
</style>

<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('admin/main') }}">
                    <i class="fas fa-arrow-left"></i>
                </a>

                <span class="navbar-brand mb-0 h1"><strong>Dashboard</strong></span>

                <!-- Avatar -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown">
                            @foreach ($admins as $admin)
                            <img src="{{asset('storage/' . $admin->profilePic)}}" class="rounded-circle" height="25" alt="avatar" />
                            @endforeach
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{url('profileadmin') }}">My profile</a></li>
                            <li><a class="dropdown-item" href="{{ url('loginpage') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="profile-container">
        <div class="profile-section">
            <!-- Profile Header -->
            <div class="card profile-header-card justify-content-center align-items-center"
                style="margin-top: 30px; width: 100%; height: 80px; padding: 20px;">
                <h3 class="mb-1 text-center"><strong>My Profile</strong></h3>
            </div>


            <!-- Profile Picture Card -->
            <div class="card text-center">
                <div class="card-body centered">
                @foreach ($admins as $admin)
                <img src="{{ asset('storage/' . $admin->profilePic) }}" id="profile-picture" class="img-fluid rounded-circle mb-3" alt="Admin Profile Picture">
                <h5 id="admin-username">{{ $admin->username }}</h5>
            
                    <form action="{{ route('admin.update.picture', ['id_admin' => $admin->id_admin]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3 text-left">
                            <label for="profile-picture-upload" class="form-label">Change Profile Picture</label>
                            <input type="file" class="form-control" id="profile-picture-upload" name="profilePic">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Upload Foto Profile</button>
                        </div>
                    </form>
                </div>
                @endforeach
            </div>

            <!-- Change Password Card -->
        </div>
    </div>
    <script>
        document.getElementById('profile-picture-upload').onchange = function (event) {
            const reader = new FileReader();
            reader.onload = function () {
                const output = document.getElementById('profile-picture');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
</body>

</html>