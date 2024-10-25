<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: index.html");  // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Autobiography</title>
    <link rel="stylesheet" href="card.css" />
  </head>
  <body>
    <div class="card">
          <h2>Autobiography</h2>

          <div class="image-container">
            <img class="user-profile" src="gwapito.png" alt="<?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>"
            style="width: 75%; height: 200px; border-radius: 50%; display: block; margin: 0 auto;"
            >
          </div>

          <p><strong>Name:</strong> <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></p>
          <p><strong>Age:</strong> <?php echo $_SESSION['age']; ?></p>
          <p><strong>Address:</strong> <?php echo $_SESSION['address']; ?></p>

          <!-- Logout Button -->
          <a href="logout.php" class="logout-btn">Logout</a>
    </div>
  </body>
</html>
