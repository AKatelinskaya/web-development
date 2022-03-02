<?php
header("Content-Type: text/plain");
$text = $_GET["text"];
$text = preg_replace('/\s+/', ' ', $text);
$text = trim($text);
echo $text;