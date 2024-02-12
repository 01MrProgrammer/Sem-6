<?php
session_start();
if (isset($_SESSION['logged_in'])) {
?>
<html>
<head>
<title>Welcome</title>
</head>
<body>
  <h2>Welcome, <?php echo $_SESSION['logged_in']; ?>!</h2>
  </body>
</html>
<?php
} else {
  header("Location: login.php");
  exit;
}
?>
