<!DOCTYPE html>
<html>
    <head> <title> Set BQ1 </title>
</head>
<body>
<form method="POST">
<table>
<tr> <td> Enter Name </td> 
<td> <input type="text" name = "txtname"></td></tr>
<tr> <td> Enter Password </td>
<td> <input type="password" nume="txtpass"></td></tr>
<tr><td><input type="submit" name="btmlogin" value="login"></td></tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['btnlogin'])){
session_start();
$nm = $_POST['txtnume'];
$ps = $_POST['txtpass'];
if($_SESSION['login'] == "3")
{
echo "Blocked";
}
else if ($nm == "kthm" && $ps == "kthm")
{
header("location:welcome1.php");
}
else {
 echo $_SESSION['login']++;
}
}
?>