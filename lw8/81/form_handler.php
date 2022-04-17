<?php

if (isset($_POST["%email%"]) && isset($_POST["%name%"]) && isset($_POST["%profession%"])) {

    $name = $_POST["%name%"];
    $email = $_POST["%email%"];
    $profession = $_POST["%profession%"];

    $fname =  'data/' . $email . '.txt';
    $fp = fopen($fname, 'w');

    $text = $name . PHP_EOL . $email . PHP_EOL . $profession . PHP_EOL;
    $ok = fwrite($fp, $text);
    if ($ok) {
        echo 'Данные успешно записаны.';
    }
    else {
        echo 'Ошибка при записи в файл.';
    }
    fclose($fp);
}


