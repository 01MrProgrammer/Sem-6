<?php
// Array of suggestions
$suggestions = array(
    "apple",
    "banana",
    "cherry",
    "grape",
    "lemon",
    "orange",
    "pear",
    "strawberry",
    "watermelon"
);

$userInput = $_POST['userInput'];
$matches = array();

foreach($suggestions as $suggestion) {
    if(stripos($suggestion, $userInput) !== false) {
        $matches[] = $suggestion;
    }
}

if(count($matches) > 0) {
    foreach($matches as $match) {
        echo "<p>$match</p>";
    }
} else {
    echo "<p>No suggestions found</p>";
}
?>
