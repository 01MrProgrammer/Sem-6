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

$selectedCustomer = $_POST['selectedCustomer'];

$sql = "SELECT * FROM `Order` WHERE cno = $selectedCustomer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Order Details</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Order No</th><th>Order Date</th><th>Shipping Address</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ono'] . "</td>";
        echo "<td>" . $row['odate'] . "</td>";
        echo "<td>" . $row['shipping_address'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No orders found for this customer.";
}

$conn->close();
?>
