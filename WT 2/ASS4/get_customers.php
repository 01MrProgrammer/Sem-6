<?php
// Assuming you have a database connection established already
// Replace database credentials as per your setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT cno, cname FROM Customer";
$result = $conn->query($sql);

$options = "<option value=''>Select a customer</option>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $options .= "<option value='" . $row['cno'] . "'>" . $row['cname'] . "</option>";
    }
}

echo $options;

$conn->close();
?>
