<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?= $pageHeader ?></h1>
    <?php include "menu.php" ?>
    <br>
    <?php foreach ($tasks as $task): ?>
        <div>
            <?=$task?> [Done]
        </div>
    <?php endforeach;?>
</body>
</html>