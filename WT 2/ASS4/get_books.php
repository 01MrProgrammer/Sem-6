<?php
$xml = simplexml_load_file("books.xml");
echo $xml->asXML();
?>
