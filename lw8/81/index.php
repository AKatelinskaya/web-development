<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Don't do it</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto+Condensed&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="main-container">
        <header class="header__wrap">
            <a href="#">
                <img class="header__logo-icon" src="images/header__menu_black-logo.svg" alt="Логотип Don't do it" />
            </a>

            <menu class="header__menu">
                <li class="header__menu-item">
                    <a href="#">Что будет на курсе?</a>
                </li>
                <li class="header__menu-item">
                    <a href="#">Вопросы</a>
                </li>
                <li class="header__menu-item">
                    <a href="#">Автор</a>
                </li>
            </menu>

            <button class="header__action-button">
                Записаться на курс
            </button>

            <div class="header__mobile-menu-button"></div>
        </header>
    </div>

    <div class="main-container">
        <div class="banner">
            <div class="banner__text-wrap">
                <h1 class="banner__main-header">
                    Не <span class="marker-text">делай</span> это
                </h1>

                <p class="banner__subtitle">
                    Онлайн-курс для творческих людей, о том, как управлять своим временем
                </p>

                <button class="banner__button">
                    Записаться на курс
                </button>
            </div>

            <div class="banner__image-wrap">
                <img src="images/banner_image.png" class="banner__image" alt="Курс Не делай это" />
            </div>
        </div>
    </div>

    <section class="skills">
        <div class="skills__item-wrap">
            <img src="images/skills_time.png" alt="Иконка время" />
            <p class="skills__item-text">
                Для тех, у кого слишком много идей и слишком мало времени
            </p>
        </div>

        <div class="skills__item-wrap">
            <img src="images/skills_notebook.png" alt="Иконка заметки">
            <p class="skills__item-text">
                Метод «списка не дел», который позволит успевать и реализовывать
            </p>
        </div>

        <div class="skills__item-wrap">
            <img src="images/skills_target.png" alt="Иконка цель" />
            <p class="skills__item-text">
                Курс научит творческих людей сосредоточиваться
            </p>
        </div>
    </section>


    <div class="middle-container">
        <section class="problems">
            <div class="problems__content-wrap">
                <div class="problems__image-left-wrap">
                    <img src="images/problems_tasks.png" class="problems__image" alt="Картинка многозадачность" />
                </div>

                <div class="problems__right-wrap">
                    <h3 class="section_header problems__section-header">Ты не успеешь</h3>
                    <p class="problems__description">
                        Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей.
                        Как прибавить суткам часы, рассмотрим в нашем курсе.
                    </p>
                </div>
            </div>

            <div class="problems__content-wrap problems__content-reverse">
                <div class="problems__left-wrap">
                    <div class="problems__left-text-wrap">
                        <h3 class="section_header problems__section-header">Опять дедлайн</h3>
                        <p class="problems__description">
                            В мире, где столько всего интересного, когда же успевать жить?
                        </p>
                    </div>
                </div>
                <div class="problems__image-right-wrap">
                    <img src="images/problems_deadline.png" class="problems__image" alt="Картинка многозадачность" />
                </div>
            </div>
        </section>
    </div>

    <div class="main-container">
        <section class="you-can">
            <h3 class="you-can__section-header section_header">На курсе ты <span class="marker-text">сможешь</span></h3>
            <div class="you_can__card-wrap">
                <div class="you-can__card ">
                    <img src="images/you_can_one.png" alt="" />
                    <p class="you-can__description">
                        Понять, что нужно делать, а что делать не стоит.
                    </p>
                </div>

                <div class="you-can__card">
                    <img src="images/you_can_two.png" class="you-can__card-icon" alt="" />
                    <p class="you-can__description">
                        Перестать себя искусственно ограничивать.
                    </p>
                </div>

                <div class="you-can__card">
                    <img src="images/you_can_three.png" class="you-can__card-icon" alt="" />
                    <p class="you-can__description">
                        Определить сильные стороны и начать использовать слабые.
                    </p>
                </div>

                <div class="you-can__card">
                    <img src="images/you_can_four.png" class="you-can__card-icon" alt="" />
                    <p class="you-can__description">
                        Научиться достигать любой цели в 3 понятных шага.
                    </p>
                </div>

                <div class="you-can__card">
                    <img src="images/you_can_five.png" class="you-can__card-icon" alt="" />
                    <p class="you-can__description">
                        Сотрудничать эффективно и с правильными людьми.
                    </p>
                </div>

                <div class="you-can__card">
                    <img src="images/you_can_six.png" class="you-can__card-icon" alt="" />
                    <p class="you-can__description">
                        Оптимизировать общение с клиентами и проведение совещаний.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <?php include "form.php"?>

    <footer class="footer-wrap">
        <div class="footer__light-logotype">
            <img src="images/footer_light_logotype.png" alt="Логотип don't do it" />
        </div>
    </footer>
</body>