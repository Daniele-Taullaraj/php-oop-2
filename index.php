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

    <div>
        <?php
         foreach ($products as $product){
            echo "<p>" . $product->print() . "</p>";
        } 
        ?>
    </div>
</body>
</html>