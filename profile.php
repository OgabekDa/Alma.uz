<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
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
<h1>Welcome <?= $_SESSION['name'] ?> !</h1>
<a href="logout.php">Logout</a><hr><br>


<?php
include('controller/read.php');
// print_r($data_post);

?>

<a href="view/create.php">Post Qosiw</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tema ati</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $k = 0;
    foreach($data_post as $key => $single_post): 
    
    ?>
    <tr>
      <th scope="row"><?= $k+=1; ?></th>
      <td><?php echo $single_post['title']; ?></td>
      <td>
        <form action="controller/delete.php" method="post">
          <input type="hidden" name="key" value="<?php echo $key;?>">
          <input type="submit" value="Del">
        </form>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>