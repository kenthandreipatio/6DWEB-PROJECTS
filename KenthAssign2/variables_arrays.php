<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="style.css">
        <title>Variables & Arrays - F1</title>
    </head>
    <body>
        
    <?php include "header.php"; ?>
    
    <?php
    $race = "Grand Prix Weekend";
    $drivers = ["Max Verstappen", "Lewis Hamilton", "Charles Leclerc"];
    $merch = ["Cap"=>1200, "Jersey"=>2500];
    
    if(count($drivers) > 2){
        echo "Lots of drivers racing!<br>";
    }else{
        echo "Few drivers only<br>";
    }
    
    $index = 0;
    while($index < count($merch)){
        $key = array_keys($merch)[$index];
        echo "Merch: $key - ₱".$merch[$key]."<br>";
        $index++;
    }
    ?>
    <?php include "footer.php"; ?>

</body>
</html>