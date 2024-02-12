<?php
session_start();
if (isset($_POST['name'], $_POST['addr'], $_POST['mobno'])) {
  $_SESSION['customer'] = array('name' => $_POST['name'], 'addr' => $_POST['addr'], 'mobno' => $_POST['mobno']);
} else {
  header("Location: customer_info.php");
  exit;
}
?>
<html>
<head>
<title>Product Information</title>
</head>
<body>
<h2>Enter Product Information</h2>
<form action="bill.php" method="post">
  <label for="prodname">Product Name:</label><br>
  <input type="text" id="prodname" name="prodname" required><br><br>
  <label for="qty">Quantity:</label><br>
  <input type="number" id="qty" name="qty" required><br><br>
  <label for="rate">Rate:</label><br>
  <input type="number" id="rate" name="rate" required><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
