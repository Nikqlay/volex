<h1>Тестирование</h1>
<p>
<a href="/">VOLEX.LC</a> предлагаем пройти небольшой тест.
<ul>
<li>Представьтесь пожалуйста:</li>

    <h4>Для начала тестирования введите:</h4>
    <form method="POST" action="/tests">
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="text" name="family" placeholder="Ваша фамилия"> <br>
        <li>Выберите:</li>
        <h4>Ваш пол</h4>
        <input type="radio" name="sex" value="Man" checked> Мужской
        <input type="radio" name="sex" value="Women"> Женский <br>
        <li>Для начала нажмите - <input type="submit" value="Далее"></li>
    </form>

    <?php
    if (!empty($data)) print_r($data);
    ?>

</ul>
</p>