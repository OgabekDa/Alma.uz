<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <h1>Alma UZ</h1>
    <div class="row align-items-start">
        
    
        <?php
            include_once('controller/read.php');
            foreach($data_post as $key => $single_post):
        ?>
            <div class="col-3">

            <div class="card" style="width: 18rem;">
            <img src="img/<?= $single_post['img'] ?>" class="card-img-top" alt="<?= $single_post['img'] ?>">
            <div class="card-body">

            <a href="single_post.php?<?= 'key=' . $key?>"><?= $single_post['title'] ?></a>

            <div class="col-200 text-truncate">
                <?= $single_post['text'] ?>
            </div>
            
            </div>
            </div>
            </div>

        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>