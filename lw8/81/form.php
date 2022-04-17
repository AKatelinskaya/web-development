<div class="main-container enroll">
    <img class="enroll__image" src="images/form-image.png" alt="Заполните форму" />
    <h4 class="enroll__title">Записаться на курс</h4>

    <form method="post" action="form_handler.php" class="enroll__visit-form">
        <input required type="text" name="%name%" placeholder="Ваше имя" class="enroll__input">
        <input required type="email" name="%email%" placeholder="Email" class="enroll__input">
        <select required name="%profession%" class="enroll__input">
            <option value="Программист">Программист</option>
            <option value="Дизайнер">Дизайнер</option>
            <option value="Маркетолог">Маркетолог</option>
        </select>


        <div class="enroll__form-checkbox_label">

            <input required name="%agreement%" type="checkbox" class="enroll__form-checkbox">
            <label>
                Согласен получать информационные материалы о старте курса
            </label>
        </div>
        <button class="enroll__button" type="submit">Записаться на курс</button>
    </form>
</div>