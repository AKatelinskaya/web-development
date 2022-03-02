<?php
if (empty($_GET['text']))
    exit('Error - empty input');
$text = $_GET['text'];

preg_match('/^[a-zA-Z][a-zA-Z0-9]+/', $text, $matches);

$length = strlen($matches[0]);
$different = strlen($text) - $length;

if ($different > 0)
    exit('Error - char in ' . $length . ' position not english bet or digit');

$security = 0;
$digits = 0;
$uppercase = 0;
$lowercase = 0;
$bets = 0;
$countRepeatSymbol = 0;

for ($i = 0; $i < $length; $i++) {
    $char = $text[$i];
    if (ctype_digit($char))
        $digits++;
    else {
        $bets++;
        if (ctype_upper($char))
            $uppercase++;
        else
            $lowercase++;
    }

    //количество повторов
    $repeats = substr_count($text, $char);
//    echo 'Ch=' . $repeats;
    if ($repeats > 1) {
        $countRepeatSymbol += 1;
    }
}

$security += 4 * $length; //К надежности прибавляется (4*n), где n - количество всех символов пароля
$security += 4 * $digits; //К надежности прибавляется +(n*4), где n - количество цифр в пароле
if ($uppercase != 0)
    $security += 2 * ($length - $uppercase); //К надежности прибавляется +((len-n)*2) в случае, если пароль содержит n символов в верхнем регистре, если символов в верхнем регистре нет, то ничего не прибавляется
if ($lowercase != 0)
    $security += 2 * ($length - $lowercase); //К надежности прибавляется +((len-n)*2) в случае, если пароль содержит n символов в нижнем регистре, если символов в нижнем регистре нет, то ничего не прибавляется


//Если пароль состоит только из букв вычитаем число равное количеству символов.
if ($bets === $length)
    $security -= $length;

//Если пароль состоит только из цифр вычитаем число равное количеству
if ($digits === $length)
    $security -= $length;

$security -= $countRepeatSymbol;

echo('Security = ' . $security);