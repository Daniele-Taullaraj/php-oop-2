<?php
include __DIR__ . '/store.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    <h1>HELLO OOP</h1>
    <?php foreach ($products as $product) { ?>
        <div>
            <?php $product->print(); ?>
        </div>
    <?php } ?>
</body>
</html>