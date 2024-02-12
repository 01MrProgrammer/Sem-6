<?php
$style = $_GET['s1'];
$color = $_GET['c'];
$size = $_GET['s'];
$b_color = $_GET['b'];
setcookie("set1", $style, time() + 3600);
setcookie("set2", $color, time() + 3600);
setcookie("set3", $b_color, time() + 3600);
setcookie("set4", $size, time() + 3600);
echo "style is " . $style . " color is " . $color . " Background color is " . $b_color . " size is " . $size;
?>
<html>
<head>
<title>Page 2 - Preferences Summary</title>
</head>
<body>
<h2>Your selected preferences:</h2>
<p>Font Style: <?php echo $style; ?></p>
<p>Font Size: <?php echo $size; ?></p>
<p>Font Color: <?php echo $color; ?></p>
<p>Background Color: <?php echo $b_color; ?></p>
<p>See these preferences applied on the next page.</p>
</body>
</html>
