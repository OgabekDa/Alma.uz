<?php

if(file_exists('data.json')){
    $json_data = file_get_contents('data.json',);
    $data_post = json_decode($json_data,true);
}

?>