<!--Kenth Andrei M.PATIO -->
<?php include "header.php"; ?>

<div class="box">
    <h3>Check Stock</h3>
    <?php
    $checkShoe = "Adidas EVOSL";
    $checkStock = 0;
    
    if($checkStock > 0){
        echo "$checkShoe is available!<br>";
    } else {
        echo "$checkShoe is out of stock.<br>";
    }
    ?>
    </div>
    
    <?php include "footer.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles.css">

</head>
</html>