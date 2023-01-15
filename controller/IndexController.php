<?php
require_once "model/User.php";
session_start();
//session_destroy();
echo"<pre>";
print_r($_SESSION);
echo"</pre>";

$pageHeader = 'Добро пожаловать!';

$username = null;

//Копировал в SecurityController. Кнопка выхода не работает
if(isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}

//Копировал в SecurityController. Кнопка выхода не работает
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
     unset($_SESSION['username']);
     session_destroy();
}


include "view/index.php";