<?php
include_once __DIR__ . '/../conf/ldap_auth.php';

header('Content-type: text/html; charset=utf-8');

if(!AUTH) {
  if(!empty($_POST['login']) && !empty($_POST['password']) && isset($users[$_POST['login']])) {
      if($users[$_POST['login']]['password'] == getPassword($_POST['password'])) {
          $_SESSION['user'] = $_POST['login'];
            setcookie('login', $_POST['login'], time() + 900, '/');
            setcookie('password', getPassword($users[$_POST['login']]['password']), time() + 900, '/');
			$_SESSION['message'] = 'Успешно';
      }
  }
  if(!isset($_SESSION['user']) || $_SESSION['user'] != $_POST['login']) {
    $_SESSION['message'] = 'Неверный логин или пароль';
  }
} else {
//        unset($_SESSION['user']);
//        setcookie('login', '', time() - 900, '/');
//        setcookie('password', '', time() - 900, '/');
          $_SESSION['message'] = 'Уже авторизован';
}
header('Location: /index.php');