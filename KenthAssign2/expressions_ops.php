<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="style.css">
        <title>Expressions & Operators - F1</title>
    </head>
    <body>
        
    <?php include "header.php"; ?>
    <?php
    $laps = 5;
    $lapTime = 6;
    
    $total = $laps * $lapTime;
    $pitTime = $total * 0.12;
    $finalTime = $total + $pitTime;
    
    $ticket = "VIP";
    $ticketMsg = match($ticket){
        "General" => "General Admission",
        "VIP" => "VIP Access",
        default => "No ticket"
    };
    echo "Ticket: $ticketMsg<br>";
    $x = 1;
    do{
        echo "Lap $x counted<br>";
        $x++;
    }while($x <= $laps);
    if($finalTime < 40){
        echo "Fast race!<br>";
    }else{
        echo "Average pace<br>";
    }
    ?>
    <p>Total Race Time: <?= $finalTime ?> mins</p>
    <?php include "footer.php"; ?>
</body>
</html>
