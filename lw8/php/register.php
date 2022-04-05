<?php
echo "ok";

$email = getPostParameter("email");
$password = getPostParameter("username");

if (!empty($password) && !empty($email)) {
    //$f = $_FILES(); ?????????????

    echo "Hello " . $email . " " . $password;
}

function getPostParameter($param_title)
{
    return $_GET($param_title);
}