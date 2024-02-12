<?php
$file = fopen("contact.dat", "r") or die("Unable to open file!");
echo "<table border='1'>
<tr>
<th>Serial No</th>
<th>Name</th>
<th>Residence Number</th>
<th>Mobile Number</th>
<th>Address</th>
</tr>";

while (!feof($file)) {
    $line = fgets($file);
    $data = explode(",", $line);
    echo "<tr>";
    foreach ($data as $value) {
        echo "<td>" . trim($value) . "</td>";
    }
    echo "</tr>";
}

fclose($file);
echo "</table>";
?>
