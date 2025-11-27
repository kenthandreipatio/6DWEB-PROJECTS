<!--Kenth Andrei M.PATIO -->

<?php include "header.php"; ?>

<div class="box">
    <h3> Shoe Sizes</h3>
    <?php
    $sizes = [6,7,8,9,10];
    $k = 0;
    
    do {
        echo "Size: ".$sizes[$k]."<br>";
        $k++;
    } while($k < count($sizes));
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