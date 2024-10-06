<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home-12081</title>

        <!-- Bootstrap 5.3. CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

            .carousel-item img {
                height: 1000px;
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
        <div id="carousel" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ $image1 }}" class="d-block w-100 img-fluid" alt="Gambar 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ $image2 }}" class="d-block w-100 img-fluid" alt="Gambar 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ $image3 }}" class="d-block w-100 img-fluid" alt="Gambar 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container mt-4 mb-3 ">
            <div class="card text-center" style="margin: auto; max-width:400px;">
                <div class="card-body">
                    <a href="{{ $ig }}" class="card-link text-dark mx-5">
                        <i class="fab fa-instagram"></i></a>
                    <a href="{{ $linkedin }}" class="card-link text-dark mx-5">
                        <i class="fab fa-linkedin"></i></a>
                    <a href="{{ $github }}" class="card-link text-dark mx-5">
                        <i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>