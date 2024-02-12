<?php
session_start();

if (isset($_POST['username'], $_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Replace with your actual username and password
  $correct_username = "admin";
  $correct_password = "12345";

  if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['logged_in'] = true;
    header("Location: welcome.php");
    exit;
  } else {
    if (!isset($_SESSION['attempts'])) {
      $_SESSION['attempts'] = 1;
    } else {
      $_SESSION['attempts']++;
    }

    if ($_SESSION['attempts'] > 3) {
      session_destroy();
      echo "Too many failed attempts. Please try again later.";
      exit;
    } else {
      $remaining_attempts = 3 - $_SESSION['attempts'];
      $error_message = "Invalid username or password. You have $remaining_attempts attempts remaining.";
    }
  }
}
?>

<html>
<head>
<title>Login</title>
</head>
<body>
<?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
<form method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" required><br><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" required><br><br>
  <input type="submit" value="Login">
</form>
</body>
</html>
