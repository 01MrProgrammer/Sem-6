<?php 
session_start();
echo $_SESSION['count']++;
?>



<?php
if(!isset($_COOKIE['count']))
{
    echo "Welcome Viewed this Page 1.";
    $cookie=1;
    setcookie("count",$cookie);
}else{
    $cookie=++$_COOKIE['count'];
    setcookie("count",$cookie);
    echo "You have viewed this page ".$_COOKIE['count']." times.";
}
?>