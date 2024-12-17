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
                <a class="navbar-brand" href="{{ url('User/home') }}">
                    <i class="fas fa-arrow-left"></i>  <span class="ms-2">Home Page</span>
                </a>
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

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Profile Picture Card -->
        <div class="card text-center">
            <div class="card-body centered">
                <img src="{{ $siswa->profilePic ? asset('storage/' . $siswa->profilePic) : asset('images/Photo2.jpg') }}" 
                     id="profile-picture" class="img-fluid rounded-circle mb-3"
                     alt="Admin Profile Picture">
                <h5 id="admin-username">{{ $siswa->nama ?? 'User' }}</h5>

                <form action="{{ route('siswa.update.profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 text-left">
                        <label for="profile-picture-upload" class="form-label">Change Profile Picture</label>
                        <input type="file" class="form-control" id="profile-picture-upload" name="profile_picture">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Upload Profile Picture</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Change Email Card -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-3">Change Email</h5>
                <form action="{{ route('siswa.update.profile') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">New Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $siswa->email }}" required>
                    </div>
                    <button type="submit" class="btn btn-success">Update Email</button>
                </form>
            </div>
        </div>

        <!-- Change Password Card -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-3">Change Password</h5>
                <form action="{{ route('siswa.update.profile') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="current-password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="current-password" name="current_password"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="new-password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="new-password" name="new_password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm_password"
                            required>
                    </div>
                    <button type="submit" class="btn btn-success">Update Password</button>
                </form>
            </div>
        </div>
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