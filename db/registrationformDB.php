<?php
//session_start();

include 'db-connectivity.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobileNumber = $_POST['mobile-number'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query to insert data into the "user-info" table
    $query = "INSERT INTO user-info (mobile_number, username, email, password) 
              VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $mobileNumber, $username, $email, $password);
    mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        // Set a success message in a session variable
        $_SESSION["registration_success"] = true;
        if (isset($_SESSION["registration_success"]) && $_SESSION["registration_success"]) {
            echo "Registration was successful! You can now log in.";
            unset($_SESSION["registration_success"]); // Unset the session variable to prevent showing the message again
        }
        header("Location: http://localhost/Rozgar-Mitra/index.php");
        exit();
    } else {
        echo "Failed to register user.";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>
