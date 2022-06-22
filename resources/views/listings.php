<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $heading ?></title>
</head>
<body>
    Llistings
    <?php foreach($listings as $value): ?>
        <p>id:<?php echo $value['id']; ?></p>
        <p>title:<?php echo $value['title']; ?></p>
        <p>description:<?php echo $value['description']; ?></p>
        <hr>
        <?php endforeach;?>
</body>
</html>