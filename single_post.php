<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
</head>
<body>
    <?php
        include_once('controller/read.php');
        foreach($data_post as $key => $single_post):
            if($key == $_GET['key']){
    ?>
        <h1><?= $single_post['title'] ?></h1>
        <img src="img/<?= $single_post['img'] ?>" alt="<?= $single_post['img'] ?>" width="35%">
        <div class="sticky-md-top"><?= $single_post['text'] ?></div>
    <?php 
            }
        endforeach;
    ?>
</body>
</html>