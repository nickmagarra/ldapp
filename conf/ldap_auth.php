<?php
header('Content-type: text/html;charset=utf-8');
session_start();

define('SALT', 'As913yr-1u3 -ru1 mr=1r=1 m=0r813');

function getPassword($password)
{
    return md5($password.SALT);
}

$users = array(
    'login1' => array('password' => 'c092a962f8eef8481414ff714399f587', 'name' => 'user1'),
    'login2' => array('password' => '90a22745d4ef187fb36c32fb0994c83d', 'name' => 'user2'),
);

if(!isset($_SESSION['user']) && isset($_COOKIE['login']) && isset($_COOKIE['password'])
    && isset($users[$_COOKIE['login']]) && getPassword($users[$_COOKIE['login']]['password']) == $_COOKIE['password']) {
    $_SESSION['user'] = $_COOKIE['login'];
}

define('AUTH', isset($_SESSION['user']) && isset($users[$_SESSION['user']]));
$user = AUTH ? $users[$_SESSION['user']] : null;

$message = '';
if(!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
