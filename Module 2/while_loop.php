
<!--Kenth Andrei M.PATIO -->
<?php include "header.php"; ?>

<div class="box">
    <h3>Available Shoes</h3>
    <?php
    $shoes = ["Nike Air", "Adidas Runner", "Puma Speed", "Asics Gel", "New Balance Fresh"];
    $stock = [5, 0, 3, 2, 4];
    $i = 0;
    
    while($i < count($shoes)) {
        $shoe = $shoes[$i];
        $qty = $stock[$i];
        
        if($qty > 0){
            echo "Available: $shoe - $qty in stock<br>";
        } else {
            echo "$shoe - Out of stock!<br>";
        }
        
        $i++;
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