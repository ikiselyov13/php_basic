<a href="/">Главная</a>
<!--<a href="/?controller=security">Авторизации</a>-->
<!--<a href="/?controller=tasks">Задачи</a>-->
<!--Кнопка Задачи, если пользователь авторизован-->
<?php if($username !== null) : ?>
    <p>
        <a href="/?controller=tasks">Задачи</a>
    </p>
<?php endif;?>
<br>

<?php if($username !== null) : ?>
    <p>
        Рады Вас приветствовать, <?= $username ?>.
        
        <a href="?action=logout">[Выход]</a>
    </p>
<?php endif;?>

<!--Кнопка Войти, если пользователь не авторизован-->
<?php if($username === null) : ?>
    <p>
        <a href="/?controller=security">Войти</a>
    </p>
<?php endif;?>