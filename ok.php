<?php require('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>verify your info then pay</title>
    <style>
        body {
            font-family: 'Open Sans', Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .receipt-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 60%;
            max-width: 600px;
            transition: all 0.3s ease;
        }
        .receipt-container:hover {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }
        .receipt-header {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
            position: relative;
        }
        .receipt-header::after {
            content: '';
            width: 50px;
            height: 3px;
            background-color: #5cb85c;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .receipt-item {
            margin: 15px 0;
            font-size: 18px;
            color: #555;
        }
        .receipt-item span {
            font-weight: bold;
            color: #333;
        }
        .receipt-item:nth-child(even) {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
        }
        .receipt-item:nth-child(odd) {
            padding: 10px;
        }
        .receipt-item:first-child {
            margin-top: 0;
        }
        .receipt-item:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <div class="receipt-header">verify your info then pay</div>
        <?php
        
        session_start();
        $name = htmlspecialchars($_SESSION['name']);
        $mobileNumber = htmlspecialchars($_SESSION['mobilenumber']);
        $address = htmlspecialchars($_SESSION['address']);
        $message = htmlspecialchars($_SESSION['message']);
        $service = htmlspecialchars($_SESSION['service']);
        $timeperiod = htmlspecialchars($_SESSION['timeperiod']);
        ?>
        <div class="receipt-item"><span>Full Name:</span> <?php echo $name; ?></div>
        <div class="receipt-item"><span>Mobile Number:</span> <?php echo $mobileNumber; ?></div>
        <div class="receipt-item"><span>Address:</span> <?php echo $address; ?></div>
        <div class="receipt-item"><span>Message:</span> <?php echo $message; ?></div>
        <div class="receipt-item"><span>Service:</span> <?php echo $service; ?></div>
        <div class="receipt-item"><span>Time Period:</span> <?php echo $timeperiod; ?></div>
        <div class="receipt-item"><span>PAY:</span><form action="submit.php" method="post">
        <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $publishablekey?>"
    data-amount="1000"
    data-name="Rojgar Mitral"
    data-description="Rojgar Mitra"
    data-image="https://images.indianexpress.com/2021/08/labour-12001.jpg"
    data-currency="inr">
</script>
   
</form> </div>

    </div>
</body>
</html>
