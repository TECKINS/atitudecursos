<?php
//$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
//print_r($xml);

$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

print $xmlDoc->saveXML();
?>
