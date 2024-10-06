<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile-Marsella Adinda Oktaviani</title>

        <!-- Bootstrap 5.3. CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <!-- Poppins -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <style>
            .navbar {
                background-color: #f8f9fa;
                box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
            }
            .nav-link {
                text-decoration: none;
                transition: all 0.3s ease;
            }
            
            .nav-link:hover {
                font-weight: bold;
                text-decoration: underline;
            }

            .dropdown-item {
                text-align: center;
            }

            @media (max-width: 991.98px) {
                .navbar-nav {
                    text-align: center;
                    width: 100%;
                }
            }

            .custom-margin {
                margin-top: 70px;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand">Atmarior</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/profile') }}">Profile</a>
                        </li>
                        <li class="nav-item dropdown mx-auto mb-2 mb-lg-0">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/home') }}">Home</a></li>
                                <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="custom-margin text-center">My Profile</h1>
        <div class="container mb-5">
            <div class="card text-center border-dark" style="margin: auto; max-width:400px;">
                <img src="{{ $foto }}" class="card-img-top" alt="Foto">
                <div class="card-body">
                    <h5 class="card-title my-2">{{ $judul }}</h5>
                    <p class="card-text mt-3">{{ $isi }}</p>
                    <div class="container text-center mt-5">
                        <a href="{{ url('/home') }}" class="btn btn-outline-danger">Back to Home ></a>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>