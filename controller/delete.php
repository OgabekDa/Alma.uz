<?php

$json_data = file_get_contents('../data.json',);
$data_post = json_decode($json_data,true);


$key = $_POST['key'];


unset($data_post[$key]);
file_put_contents('../data.json', json_encode($data_post, JSON_FORCE_OBJECT));

header("Location: ../profile.php");

?>