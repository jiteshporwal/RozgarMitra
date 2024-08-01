<?php require('config.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="get-number/fonts/icomoon/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="get-number/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="get-number/css/style.css">
    <title>Get number</title>
</head>
<body>
<?php include 'header.php'; ?> 
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Get Number</h1>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Get Number</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
<div class="content">  
    <div class="container">
        <div class="row">
            <div class="col-md-5 mr-auto">
                <h3 class="mb-3">Read it.</h3>
                <p>"Before you can access the contact number of a worker, we kindly ask you to provide some necessary information. This helps us ensure the safety and efficiency of our services. Please fill out the required details in the provided form, including your name, contact information, and any specific service requirements you may have. Once your information is submitted, we will promptly process your request and provide you with the contact number of the designated worker. Thank you for your cooperation in making our platform a trusted and reliable resource for connecting users with skilled workers."</p>
                <p>"Additionally, please note that there is a nominal fee of 10 rupees associated with accessing the contact number of the worker. This fee helps us maintain and improve our platform to continue providing quality service to our users. Payment can be made securely through our designated payment gateway after submitting the required information. Upon successful payment, you will receive the worker's contact number without delay. We appreciate your understanding and support in sustaining our platform's operations."</p>
                <p>"Rest assured that your information and transactions are handled with the utmost security and privacy measures in place. Our platform employs robust encryption protocols and stringent data protection practices to safeguard your personal details at every step of the process. You can trust that your information will be kept confidential and used solely for the purpose of facilitating your interaction with our platform. Your safety and trust are our top priorities, and we remain committed to ensuring a secure and reliable experience for all our users."</p>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h3 class="heading">Fill the form and pay 10 rupees to get the labour number</h3>

                    <form action="clientDetailed.php"  method="POST"  name="getnumber" class="mb-5">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name" class="col-form-label">Name *</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="organization" class="col-form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="mobilenumber" id="organization" placeholder="Your mobile number" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email" class="col-form-label">Address *</label>
                                <input type="text" class="form-control" name="address" id="email" placeholder="Your address where you need a labour" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message" class="col-form-label">Project Description *</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Describe about for what purpose you need a labour" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 form-group">
                                <label for="service" class="col-form-label">Service</label>
                                <select class="custom-select" id="service" name="service">
                                    <option selected>Choose labour Service</option>
                                    <option value="general-service">General Service</option>
                                    <option value="Plumber">Plumber</option>
                                    <option value="Goods-Relocation-Service">Goods Relocation Service</option>
                                    <option value="ElectroCare">ElectroCare</option>
                                    <option value="HomeCrafters">HomeCrafters</option>
                                    <option value="Agricultural-Assistant">Agricultural Assistant</option>
                                    <option value="Factory-Worker">Factory Worker</option>
                                    <option value="ColorCrafters">ColorCrafters</option>
                                    <option value="Kitchen-Helper">Kitchen Helper</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="date" class="col-form-label">Time Period</label>
                                <input type="text" class="form-control" name="timeperiod" id="date" placeholder="Example: 1 jan to 15 jan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Checkout" class="btn btn-block btn-primary rounded-0 py-2 px-4" id="checkoutBtn"/>
                                <!-- <span class="submitting"></span> -->
                            </div>
                            
                        </div>

                    </form>
                
              
                </div>
            </div>
        </div>
    </div>
</div>
<script src="get-number/js/jquery-3.3.1.min.js"></script>
<script src="get-number/js/popper.min.js"></script>
<script src="get-number/js/bootstrap.min.js"></script>
<script src="get-number/js/jquery.validate.min.js"></script>
<script src="get-number/js/main.js"></script>


</body>
</html>
