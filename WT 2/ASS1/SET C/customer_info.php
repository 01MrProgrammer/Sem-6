<?php
session_start();
?>
<html>
<head>
<title>Customer Information</title>
</head>
<body>
<h2>Enter Customer Information</h2>
<form action="product_info.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br><br>
  <label for="addr">Address:</label><br>
  <input type="text" id="addr" name="addr" required><br><br>
  <label for="mobno">Mobile Number:</label><br>
  <input type="text" id="mobno" name="mobno" required><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
