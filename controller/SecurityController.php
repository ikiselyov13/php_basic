<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();

$error = null;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    header("Location: index.php");
    die();
}

if(isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);
    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['username'] = $user;
        header("location: index.php");
        die();
    }
}

/*Скопировал объявление переменных из IndexController
if(isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}*/

/*Скопировал логику выхода из IndexController
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
     unset($_SESSION['username']);
     session_destroy();
}*/

include "view/signin.php";
//include "view/menu.php";
//include "view/index.php";