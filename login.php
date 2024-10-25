<?php
session_start();
require 'config.php';  // File with database connection details

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT id, first_name, last_name, name_suffix, username, password, age, address, image_profile FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $first_name, $last_name, $name_suffix, $db_username, $db_password, $age, $address, $image_profile);
        $stmt->fetch();

        if ($password === $db_password) {
            // Store all relevant details in the session
            $_SESSION['id'] = $id;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            $_SESSION['name_suffix'] = $name_suffix;
            $_SESSION['username'] = $username;  
            $_SESSION['age'] = $age;
            $_SESSION['address'] = $address;
            $_SESSION['image_profile'] = $image_profile;

            header("Location: card.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Username not found.";
    }

    $stmt->close();
}
?>
