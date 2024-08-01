<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'RojgarMitra-users');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} 

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['mobilenumber'] = $_POST['mobilenumber'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['message'] = $_POST['message'];
    $_SESSION['service'] = $_POST['service'];
    $_SESSION['timeperiod'] = $_POST['timeperiod'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; 
    $mobileNumber = $_POST['mobilenumber'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $Service = $_POST['service'];
    $timeperiod = $_POST['timeperiod'];

    // Prepare and execute the SQL query to insert data into the "Registrant-" table
    $query = "INSERT INTO `Registrant` (name, mobilenumber, address, message, service, timeperiod) 
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $mobileNumber, $address, $message, $Service, $timeperiod);
    $success = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if ($success) {
        // Set a success message in a session variable
        $_SESSION["registration_success"] = true;
        if (isset($_SESSION["registration_success"]) && $_SESSION["registration_success"]) {
            echo "Registration was successful! You can now log in.";
            unset($_SESSION["registration_success"]); // Unset the session variable to prevent showing the message again
        }
        header("Location: http://localhost/Rozgar-Mitra/ok.php");
        exit();
    } else {
        echo "Failed to register user.";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>
