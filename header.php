<?php
session_start();

$accountLink = '';
$loginLink = '';

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in, store the account link HTML in a variable
    $accountLink = '<div class="nav-item dropdown">
              <a href="#" class="nav-link" data-bs-toggle="dropdown">
             <img src="img/account.png" id="account-check-ac" style="max-width: 45px; margin-left: 5px; max-height: 60px;">
              </a>
    <div class="dropdown-menu m-0" style="left: -100px !important;">
        <a href="" class="dropdown-item">Profile</a>
        <a href="" class="dropdown-item">Bookings</a>
        <div class="dropdown-divider"></div>
        <a href="" class="dropdown-item">Logout</a>
    </div>
</div>';
  
    //$accountLink = '<a href="account.php"><img src="img/account.png" id="account-check" style="max-width: 45px; margin-left: 5px; max-height: 60px;"></a>';
} else {
    // User is not logged in, store the login link HTML in a variable
    $loginLink = '<a href="login/login.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0" style="background: white; color: black !important; margin-left: 5px">Login</a>';
}
?>


    <head>
        <meta charset="utf-8">
        <title>Rojgar Mitra</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
  <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Mandsaur</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>9826711839</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>rojgarmitra18@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <img src="img/Black And White Aesthetic Minimalist Modern Simple Typography Coconut Cosmetics Logo.png"  class="images" alt="Logo">
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="getNumber.php" class="dropdown-item">Contact with Worker</a>
                                
                    
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testinominal.php" class="dropdown-item">Testimonial</a>
                                
                            </div>
                        </div>
                        <!-- <a href="contact.php" class="nav-item nav-link">Contact Us</a> -->
                    </div>
                    <a href="getNumber.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0" >Contact with Worker</a>

                    <a href="workers-detailed.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0" >रोजगार मित्र के साथ काम<br>करने के लिए पंजीकरण प्रक्रिया</a>

                    <?php echo $accountLink; ?>
                    <?php echo $loginLink; ?>
                    <!-- <a href="login/login.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0" style="background: white;color: black !important; margin-left: 5px">Login</a>
                    <a href="login/login.php"><img src="img/account.png" id="account-check" style=" max-width: 45px; margin-left: 5px;max-height: 60px;"></a>
 -->



</div>
            </nav>


       