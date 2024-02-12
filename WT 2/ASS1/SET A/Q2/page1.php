<?php
if (isset($_COOKIE['set1'], $_COOKIE['set2'], $_COOKIE['set3'], $_COOKIE['set4'])) {
  $style = $_COOKIE['set1'];
  $color = $_COOKIE['set2'];
  $size = $_COOKIE['set4'];
  $b_color = $_COOKIE['set3'];
  echo "Your current preferences are: <br>";
  echo "Font Style: $style<br>";
  echo "Font Size: $size<br>";
  echo "Font Color: $color<br>";
  echo "Background Color: $b_color<br>";
}
?>
<html>
<head>
<title>Page 1 - Preferences</title>
</head>
<body>
<h2>Select your preferences:</h2>
<form action="page2.php" method="get">
  Font Style:
  <select name="s1">
    <option value="Arial">Arial</option>
    <option value="Times New Roman">Times New Roman</option>
    <option value="Verdana">Verdana</option>
  </select><br><br>
  Font Color:
  <select name="c">
    <option value="red">Red</option>
    <option value="blue">Blue</option>
    <option value="green">Green</option>
  </select><br><br>
  Background Color:
  <select name="b">
    <option value="white">White</option>
    <option value="black">Black</option>
    <option value="gray">Gray</option>
  </select><br><br>
  Font Size:
  <select name="s">
    <option value="12">12</option>
    <option value="16">16</option>
    <option value="20">20</option>
  </select><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
