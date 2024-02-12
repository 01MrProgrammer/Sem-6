<?php
session_start();
if (isset($_SESSION['customer'], $_POST['prodname'], $_POST['qty'], $_POST['rate'])) {
  $customer = $_SESSION['customer'];
  $prodname = $_POST['prodname'];
  $qty = $_POST['qty'];
  $rate = $_POST['rate'];
  $total = $qty * $rate;
?>
<html>
<head>
<title>Bill</title>
</head>
<body>
<h2>Bill</h2>
<table>
  <tr>
    <td>Customer Name:</td>
    <td><?php echo $customer['name']; ?></td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><?php echo $customer['addr']; ?></td>
  </tr>
  <tr>
    <td>Mobile Number:</td>
    <td><?php echo $customer['mobno']; ?></td>
  </tr>
  <tr>
    <td>Product Name:</td>
    <td><?php echo $prodname; ?></td>
  </tr>
  <tr>
    <td>Quantity:</td>
    <td><?php echo $qty; ?></td>
  </tr>
  <tr>
    <td>Rate:</td>
    <td><?php echo $rate; ?></td>
  </tr>
  <tr>
    <td>Total:</td>
    <td><?php echo $total; ?></td>
  </tr>
</table>
</body>
</html>
<?php
} else {
  header("Location: customer_info.php");
  exit;
}
?>
