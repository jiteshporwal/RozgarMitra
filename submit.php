<?php

require('config.php');
session_start();
//require ('stripe-php-master/init.php');

\Stripe\Stripe::setVerifySslCerts(false);

if(isset ($_POST['stripeToken'])) {

echo '<pre>' ;
// print_r($_POST['stripeToken']);

$token = $_POST['stripeToken'];
// print_r($token);


$paymentIntent = \Stripe\PaymentIntent::create([
    'amount' => 1000, // amount in cents
    'currency' => 'inr',
    'payment_method_types' => ['card'],
]);

//print_r($paymentIntent);

}
$conn = mysqli_connect('localhost', 'root', '', 'RojgarMitra-workers');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create the SQL query
// Retrieve the service from the session
// Retrieve the service from the session
$service = $_SESSION['service'];

// Create the SQL query with a WHERE clause to filter by service
$query = "SELECT `workerName`, `workerService`, `workerAddress`, `workerNumber`, `workerAge` FROM `workers-details` WHERE `workerService` = ?";

// Prepare and bind the statement
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $service);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Start output buffering to capture the table HTML
ob_start();
if ($result->num_rows > 0) {
    echo "<div class='table-container'>";
    echo "<table>";
    echo "<thead><tr><th>Name</th><th>Service</th><th>Address</th><th>Number</th><th>Age</th></tr></thead><tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['workerName']) . "</td>";
        echo "<td>" . htmlspecialchars($row['workerService']) . "</td>";
        echo "<td>" . htmlspecialchars($row['workerAddress']) . "</td>";
        echo "<td>" . htmlspecialchars($row['workerNumber']) . "</td>";
        echo "<td>" . htmlspecialchars($row['workerAge']) . "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
    echo "</div>";
} else {
    echo "<div class='no-results'>No results found</div>";
}

// Close the statement and connection
$stmt->close();
$conn->close();

// Get the buffered content
$table_html = ob_get_clean();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .no-results {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin: 20px;
        }
    </style>
</head>
<body>
    <?php echo $table_html; ?>
</body>
</html>
