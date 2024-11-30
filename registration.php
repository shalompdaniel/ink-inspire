<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            background-color: #333;
            padding: 20px;
            border-radius: 5px;
            max-width: 500px;
            margin: auto;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: pink;
            color: black;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: white;
        }
        .error {
            color: red;
            margin: 10px 0;
        }
        .tattoo {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h1>Register</h1>

<?php
// Initialize variables
$errors = [];
$names = ['First Name', 'Last Name', 'Email', 'Password'];
$tattoos = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop through form fields to validate
    foreach ($names as $name) {
        $field = strtolower(str_replace(' ', '_', $name));
        if (empty($_POST[$field])) {
            $errors[$field] = "$name is required.";
        }
    }

    // Check for tattoo entries
    if (isset($_POST['num_tattoos']) && is_numeric($_POST['num_tattoos'])) {
        $num_tattoos = (int)$_POST['num_tattoos'];
        for ($i = 1; $i <= $num_tattoos; $i++) {
            $tattoo_field = "tattoo_$i";
            if (empty($_POST[$tattoo_field])) {
                $errors[$tattoo_field] = "Tattoo description $i is required.";
            } else {
                $tattoos[] = htmlspecialchars($_POST[$tattoo_field]);
            }
        }
    }

    // If no errors, process the registration
    if (empty($errors)) {
        echo "<p>Registration successful!</p>";
        echo "<h3>Your Tattoos:</h3><ul>";
        foreach ($tattoos as $tattoo) {
            echo "<li>$tattoo</li>";
        }
        echo "</ul>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : ''; ?>">
    <div class="error"><?php echo isset($errors['first_name']) ? $errors['first_name'] : ''; ?></div>

    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name" value="<?php echo isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : ''; ?>">
    <div class="error"><?php echo isset($errors['last_name']) ? $errors['last_name'] : ''; ?></div>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    <div class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></div>

    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <div class="error"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></div>

    <label for="num_tattoos">Number of Tattoos</label>
    <input type="number" name="num_tattoos" id="num_tattoos" min="1" value="<?php echo isset($_POST['num_tattoos']) ? htmlspecialchars($_POST['num_tattoos']) : '1'; ?>">
    <div class="error"><?php echo isset($errors['num_tattoos']) ? $errors['num_tattoos'] : ''; ?></div>

    <div id="tattoo-fields"></div>

    <label>Tattoo Styles:</label>
    <div id="tattooStyles"></div>

    <input type="submit" value="Register">
</form>

<script src="script.js"></script> <!-- Link to the external JavaScript file -->
</body>
</html>

