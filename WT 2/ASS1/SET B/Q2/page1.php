<?php
session_start();
?>
<html>
<head>
<title>Employee Details - Page 1</title>
</head>
<body>
<h2>Enter Employee Details</h2>
<form action="page2.php" method="post">
  <label for="eno">Employee Number:</label><br>
  <input type="text" id="eno" name="eno" required><br><br>
  <label for="ename">Employee Name:</label><br>
  <input type="text" id="ename" name="ename" required><br><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" required><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
