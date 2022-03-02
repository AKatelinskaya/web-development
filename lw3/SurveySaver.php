<?php
header("Content-Type: text/plain");

if (isset($_GET["email"])) {
    $fname = 'data/' . $_GET["email"] . '.txt';
    $fp = fopen($fname, 'w');

    $data = [];
    $optionalFields = ["first_name", "last_name", "age"];

    $dataset["email"] = $_GET["email"];

    foreach ($optionalFields as $field) {
        $attr = $_GET[$field];
        if (($attr != "") || ($attr != null)) {
            $dataset[$field] = $_GET[$field];
        }
    }

    $str = 'First Name: ' . $dataset["first_name"] . PHP_EOL;
    $ok = fwrite($fp, $str); // Запись в файл
    if (!$ok)
        echo 'Ошибка при записи в файл.';

    $str = 'Last Name: ' . $dataset["last_name"] . PHP_EOL;
    $ok = fwrite($fp, $str); // Запись в файл
    if (!$ok)
        echo 'Ошибка при записи в файл.';

    $str = 'Email: ' . $dataset["email"] . PHP_EOL;
    $ok = fwrite($fp, $str); // Запись в файл
    if (!$ok)
        echo 'Ошибка при записи в файл.';

    $str = 'Age: ' . $dataset["age"] . PHP_EOL;
    $ok = fwrite($fp, $str); // Запись в файл
    if (!$ok)
        echo 'Ошибка при записи в файл.';

    fclose($fp);
}

