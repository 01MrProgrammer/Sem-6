<?php
session_start();
if (isset($_POST['eno'], $_POST['ename'], $_POST['address'])) {
  $_SESSION['eno'] = $_POST['eno'];
  $_SESSION['ename'] = $_POST['ename'];
  $_SESSION['address'] = $_POST['address'];
} else {
  header("Location: page1.php");
  exit;
}
?>
<html>
<head>
<title>Employee Earnings - Page 2</title>
</head>
<body>
<h2>Enter Employee Earnings</h2>
<form action="page3.php" method="post">
  <label for="basic">Basic Salary:</label><br>
  <input type="number" id="basic" name="basic" required><br><br>
  <label for="da">DA:</label><br>
  <input type="number" id="da" name="da" required><br><br>
  <label for="hra">HRA:</label><br>
  <input type="number" id="hra" name="hra" required><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
