<?php
$style = $_COOKIE['set1'];
$color = $_COOKIE['set2'];
$size = $_COOKIE['set4'];
$b_color = $_COOKIE['set3'];
?>
<html>
<head>
<title>Page 3 - Preferences Applied</title>
</head>
<body style="font-family: <?php echo $style; ?>; color: <?php echo $color; ?>; font-size: <?php echo $size; ?>px; background-color: <?php echo $b_color; ?>;">
<h2>Your preferences are in effect!</h2>
<p>This text reflects your chosen font style, font size, font color, and background color.</p>
