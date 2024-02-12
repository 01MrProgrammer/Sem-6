<?php
$selectedBook = $_POST['selectedBook'];

// Load the XML file
$xml = simplexml_load_file("books.xml");

// Find the book with the matching title
$bookDetails = $xml->xpath("//book[title='" . $selectedBook . "']");

if ($bookDetails) {
    // Extract details of the first matching book
    $book = $bookDetails[0];

    echo "<h3>Book Details</h3>";
    echo "<p>Title: " . $book->title . "</p>";
    echo "<p>Author: " . $book->author . "</p>";
    echo "<p>Year: " . $book->year . "</p>";
    echo "<p>Price: $" . $book->price . "</p>";
} else {
    echo "Book details not found.";
}
?>
