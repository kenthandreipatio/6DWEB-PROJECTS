<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="style.css">
        <title>Shorthand Echo - F1</title>
    </head>
    <body>
        <?php include "header.php"; ?>
        <?php
        $driver = "Charles Leclerc";
        
        switch($driver){
            case "Max Verstappen": $team = "Red Bull"; break;
            case "Lewis Hamilton": $team = "Mercedes"; break;
            case "Charles Leclerc": $team = "Ferrari"; break;
            default: $team = "Unknown";
        }
        
        for($lap=1; $lap<=3; $lap++){
            echo "Lap $lap<br>";
        }
        ?>
        <h3>Driver Info</h3>
        <?= "Driver: $driver<br>" ?>
        <?= "Team: $team<br>" ?>
        <?php include "footer.php"; ?>
    </body>
    </html>
