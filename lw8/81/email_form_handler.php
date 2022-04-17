<?php

if (isset($_POST["%email%"])) {

    $email = $_POST["%email%"];

    $fname = 'data/' . $email . '.txt';
    $fp = fopen($fname, 'r');

    while (!feof($fp)) {
        echo fgets($fp);
        echo '<br>';
    }
    fclose($fp);
}