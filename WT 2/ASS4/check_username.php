<?php
$username = $_POST['username'];

if(empty($username)){
    echo "Stranger, please tell me your name!";
} else if(in_array($username, array("Rohit", "Virat", "Dhoni", "Ashwin", "Harbhajan"))){
    echo "Hello, master $username!";
} else {
    echo "$username, I don't know you!";
}
?>
