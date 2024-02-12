<?php
session_start();
if (isset($_SESSION['eno'], $_SESSION['ename'], $_SESSION['address'], $_POST['basic'], $_POST['da'], $_POST['hra'])) {
  $total = $_POST['basic'] + $_POST['da'] + $_POST['hra'];
?>
<html>
<head>
<title>Employee Information - Page 3</title>
</head>
<body>
<h2>Employee Information</h2>
<table>
  <tr>
    <td>Employee Number:</td>
    <td><?php echo $_SESSION['eno']; ?></td>
  </tr>
  <tr>
    <td>Employee Name:</td>
    <td><?php echo $_SESSION['ename']; ?></td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><?php echo $_SESSION['address']; ?></td>
  </tr>
  <tr>
    <td>Basic Salary:</td>
    <td><?php echo $_POST['basic']; ?></td>
  </tr>
  <tr>
    <td>DA:</td>
    <td><?php echo $_POST['da']; ?></td>
  </tr>
  <tr>
    <td>HRA:</td>
    <td><?php echo $_POST['hra']; ?></td>
  </tr>
  <tr>
    <td>Total Salary:</td>
    <td><?php echo $total; ?></td>
  </tr>
</table>
</body>
</html>
<?php
} else {
  header("Location: page1.php");
  exit;
}
?>
