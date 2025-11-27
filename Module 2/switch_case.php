<!--Kenth Andrei M.PATIO -->
<?php include "header.php"; ?>

<div class="box">
    <h3>Shoe Recommendation</h3>
    <?php
    $terrain = "Trail";
    
    switch($terrain){
        case "Road": echo "Recommended: Nike Air or Puma Speed<br>"; break;
        case "Track": echo "Recommended: Adidas EVOSL<br>"; break;
        case "Trail": echo "Recommended: Asics Gel<br>"; break;
        default: echo "Any running shoe is OKAY!<br>";
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