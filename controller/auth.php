<?php

session_start();
$data = require_once('data.php');
$auth = false;

foreach($data as $user){
    if($user['login'] == $_SESSION['login'] && $user['password'] == $_SESSION['password']){
        $auth = true;
    }
}

if(!$auth){
    header("Location: login.php");
}

?>

