<!--Kenth Andrei M.PATIO -->
<?php include "header.php"; ?>

<div class="box">
    <h3>Loyalty Discount</h3>
    <?php
    $level = 3;
    
    $discount = match($level){
        1 => "Starter - No Discount",
        2 => "Regular - 5% Discount",
        3 => "Pro Runner - 10% Discount",
        4 => "Elite - 15% Discount",
        default => "VIP - 20% Discount",
    };
        echo "Level $level: $discount<br>";
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