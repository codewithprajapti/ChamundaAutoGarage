<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="testheader.css">
</head>
<body>

    <header class="header-container py-2">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo and Address -->
                <div class="col-lg-4 col-md-5 col-sm-12 d-flex align-items-center mb-2 mb-md-0">
                    <img src="logo.png" alt="Jay Chamunda Logo" class="logo mr-2">
                    <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Vanthali HighWay Road Timbavadi Junagadh</p>
                </div>

                <!-- Business Name -->
                <div class="col-lg-4 col-md-3 col-sm-12 text-center mb-2 mb-md-0">
                    <h2 class="font-weight-bold mb-0 text-center shnm">Jay Chamunda Auto Garage And Service Station</h2>
                </div>

                <!-- Social Icons and Opening Time -->
                <div class="col-lg-4 col-md-4 col-sm-12 text-right d-flex justify-content-md-end justify-content-center">
                    <div class="social-icons d-inline-flex mr-3">
                        <a href="#"><i class="fab fa-instagram text-white mx-2"></i></a>
                        <a href="#"><i class="fab fa-facebook text-white mx-2"></i></a>
                        <a href="#"><i class="fab fa-whatsapp text-white mx-2"></i></a>
                        <a href="#"><i class="fab fa-twitter text-white mx-2"></i></a>
                    </div>
                    <div class="opening-time text-right">
                        <i class="fas fa-clock"></i> <span>Opening Timing</span>
                        <p class="mb-0">10:00 AM To 08:00 PM</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
