<?php
    require_once 'config/connect.php';
    $goods_id = $_GET['id'];
    $good = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$goods_id'");
    $good = mysqli_fetch_assoc($good);
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>update</title>
</head>
<body>

<h2>Update goods</h2>
    <form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $goods_id ?>">
    <p>Name</p>
    <input type="text" name="title" value="<?= $good['title'] ?>">
    <p>description</p>
    <textarea name="description"><?= $good['description']?></textarea>
    <p>price</p>
    <input type="number" name="price" value="<?= $good['price'] ?>">
    <button type="submit">update</button>
    </form>
    
</body>
</html>