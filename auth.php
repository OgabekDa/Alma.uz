<?php

session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$data = require_once('data.php');

foreach($data as $user){
    if($user['login'] == $login && $user['password'] == $password){
        $_SESSION['name'] = $user['name'];
        $_SESSION['login'] = $user['login'];
        $_SESSION['password'] = $user['password'];
        header("Location: profile.php");
        die('ok');
    }
}

echo 'Auth error';

?>