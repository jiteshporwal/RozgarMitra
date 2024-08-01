<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Enrollment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        input[type="number"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            cursor: pointer;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Worker Enrollment Form</h2>
        <form action="DBworkerdetailed.php" method="post">
            <label for="worker-name">Worker Name:</label>
            <input type="text" id="worker-name" name="name" required>
            
            <label for="worker-service">Worker Proficient in Service:</label>
            <select  id="service" name="service">
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
                                <br>
            <br>
            <label for="worker-address">Worker Address:</label>
            <input type="text" id="worker-address" name="address" required>

            <label for="worker-number">Worker Number:</label>
            <input type="tel" id="worker-number" name="mobilenumber" required>

            <label for="worker-age">Age:</label>
            <input type="number" id="worker-age" name="age" required>

           
            <input type="submit" value="Enroll">
        </form>
    </div>
</body>
</html>
