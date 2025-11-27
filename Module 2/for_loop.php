<!--Kenth Andrei M.PATIO -->

<?php include "header.php"; ?>

<div class="box">
    <h3>Prices</h3>
    <?php
    $shoes = ["Nike Air","Adidas EVOSL","Puma Speed","Asics Gel","New Balance Fresh"];
    $prices = [5000, 4500, 4000, 4800, 4200];
    for($i=0; $i<count($shoes); $i++) 
    {  echo ($i+1).". ".$shoes[$i]." - ₱".$prices[$i]."<br>";
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