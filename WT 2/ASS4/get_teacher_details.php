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

$selectedTeacher = $_POST['selectedTeacher'];

$sql = "SELECT * FROM TEACHER WHERE tname = '$selectedTeacher'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Teacher No: " . $row['tno'] . "<br>";
    echo "Name: " . $row['tname'] . "<br>";
    echo "Qualification: " . $row['qualification'] . "<br>";
    echo "Salary: " . $row['salary'] . "<br>";
} else {
    echo "Teacher details not found.";
}

$conn->close();
?>
