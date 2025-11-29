<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Type Juggling - F1</title>
    </head>
    <body>
        
    <?php include "header.php"; ?>
    
    <?php
    
    $baseTime = 90;
    $bonus = "20";
    $penalty = "5abc";
    $totalBonus = $baseTime + intval($bonus);
    $totalPenalty = $baseTime + intval($penalty);
    if ($totalBonus > 100) {
        echo "High total time<br>";
    } else {
        echo "Acceptable time<br>";
    }
    for ($i = 3; $i >= 1; $i--) {
        echo "Race starts in: $i<br>";
    }
    ?>
    <p>Total w/ Bonus: <?= $totalBonus ?> mins</p>
    <p>Total w/ Penalty: <?= $totalPenalty ?> mins</p>
    <?php include "footer.php"; ?>
</body>
</html>