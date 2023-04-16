<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/create.php" method="post" enctype="multipart/form-data">
        <p>Tema</p>
        <input type="text" name="title">
        <hr>
        <p>Suwret juklen</p>
        <input type="file" name="img">
        <hr>
        <p>Text</p>
        <textarea name="text" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" value="Saqlaw">
    </form>
</body>
</html>