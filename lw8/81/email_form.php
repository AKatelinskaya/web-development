<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Email form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto+Condensed&display=swap" rel="stylesheet" />
</head>

<body>
<div class="main-container enroll">

    <form method="post" action="email_form_handler.php" class="enroll__visit-form">
        <input required type="email" name="%email%" placeholder="Email" class="enroll__input">
        <button class="enroll__button" type="submit">Получить данные</button>
    </form>
</body>