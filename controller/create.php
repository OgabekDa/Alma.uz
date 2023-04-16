<?php

$title = $_POST['title'];
$text = $_POST['text'];

// img magliwmatlardi aliw
$img = $_FILES['img'];
$img_name = time() . $img['name'];
$img_tmp_name = $img['tmp_name'];

# Oqiw
if(file_exists('../data.php')){
    $json_data = file_get_contents('../data.json',);
    $data = json_decode($json_data,true);
}

// print_r($data);


# Qosiw
if(isset($title) && isset($text) && isset($img)){
    $arr = [
        'title' => $title,
        'text' => $text,
        'img' => $img_name
    ];
    move_uploaded_file($img_tmp_name,"../img/" . $img_name);
    $data[] = $arr;
    file_put_contents('../data.json', json_encode($data, JSON_FORCE_OBJECT));
    header("Location: ../profile.php");

}else{
    echo "Error";
}




?>