<?php
// Database connection details
$host = "localhost";
$username = "root";
$dbPassword = "";
$dbname = "test";

// Creating a connection
$con = mysqli_connect($host, $username, $dbPassword, $dbname);

// Checking if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle Registration
if (isset($_POST['submit'])) {
    // Getting the form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $number = $_POST['number'];

    $sql = "INSERT INTO registration (firstName, lastName, gender, email, password, number) 
            VALUES ('$firstName', '$lastName', '$gender', '$email', '$password', '$number')";

    if (mysqli_query($con, $sql)) {
        echo "Entries added!";
    } else {
        echo "Error: " . mysqli_error($con); 
    }
}

// Handle Delete
if (isset($_POST['delete'])) {
    $firstName = $_POST['firstName']; 

    $result_delete = mysqli_query($con, "DELETE FROM registration WHERE firstName = '$firstName'");

    if ($result_delete) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            background-color: #0d0d0d; /* Dark background */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #ffffff; /* White text */
        }
        
        .container {
            background-color: #1a1a1a; /* Darker container */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 255, 0.5); /* Blue shadow */
            max-width: 400px;
            width: 100%;
        }
        
        h2 {
            text-align: center;
            color: #00ccff; /* Light blue */
            margin-bottom: 20px;
            text-shadow: 0 0 10px rgba(0, 204, 255, 0.7); /* Neon glow effect */
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #aaaaaa; /* Light gray */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #00ccff; /* Light blue border */
            border-radius: 6px;
            background-color: #2a2a2a; /* Dark input background */
            color: #ffffff; /* White text */
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #00ccff; /* Light blue focus */
            outline: none;
            box-shadow: 0 0 8px rgba(0, 204, 255, 0.7); /* Glow effect on focus */
        }

        button, input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #00ccff; /* Light blue */
            color: black; /* Black text */
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 16px;
            margin-top: 10px;
            position: relative;
            overflow: hidden;
        }

        button::after, input[type="submit"]::after {
            content: '';
            position: absolute;
            width: 300%;
            height: 300%;
            top: -100%;
            left: -100%;
            background: rgba(0, 204, 255, 0.3);
            transition: all 0.5s ease;
            border-radius: 50%;
            z-index: 0;
            transform: scale(0);
        }

        button:hover, input[type="submit"]:hover {
            background-color: #0099cc; /* Darker blue on hover */
            transform: translateY(-2px); /* Slightly lift the button */
        }

        button:hover::after, input[type="submit"]:hover::after {
            transform: scale(1); /* Expand the hover effect */
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #aaaaaa; /* Light gray footer text */
        }

        .error {
            color: #ff0000; /* Red error message */
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>REGISTER</h2>
    <form id="registrationForm" action="loginpage.php" method="POST" onsubmit="return validateForm()">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="o">Other</option>
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required minlength="6">

        <label for="number">Phone Number:</label>
        <input type="number" id="number" name="number" required>

        <div class="error" id="error-message" style="display: none;"></div>
        
        <button type="submit" name="submit"><span>Register</span></button>
        <input type="submit" value="Delete" name="delete">
    </form>
    <div class="footer">
        <p>&copy; 2024 Your Company</p>
    </div>
</div>

<script>
    function validateForm() {
        const errorMessage = document.getElementById('error-message');
        errorMessage.style.display = 'none'; // Hide previous error message

        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const gender = document.getElementById('gender').value;
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        const number = document.getElementById('number').value.trim();

        if (!firstName || !lastName || gender === "" || !email || !password || !number) {
            errorMessage.textContent = 'Please fill all the entries.';
            errorMessage.style.display = 'block'; // Show error message
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }
</script>

</body>
</html>
