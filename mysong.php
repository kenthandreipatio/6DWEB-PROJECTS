<!-- Kenth Andrei M. PATIO CYB-201 11/20/25-->
 <?php

#String Variables
$songName="Always";
$artistName="Daniel Caesar";
$moodType="nostalgic";

#Numerical
$repNum = 2;
$repStr = "2";
$totalRep=$repNum+$repStr;

#Array for Nouns, Verbs and Adjectives
$someNouns = ["space","time","stars","sun","love","head","street"];
$someVerbs = ["left","pass","look","laugh","pray","give","walk","remember"];
$someAdjs = ["pretty","fine","wrong","always"];

$mainLove=$someNouns[4];

#Verse 1
$verse1Arr=[
"Baby, baby, there will always be",
"A space for you and me, right where you left it",
"And just maybe, enough time will pass",
"We'll ".$someVerbs[2]." back and ".$someVerbs[3].", just don't forget it"
];

#PreChorus
$preChorus="And maybe I'm ".$someAdjs[2]." for writing this song";

#Chorus
$chorusArr=[
"Losing my ".$someNouns[5]." over you",
"And I'll be here, 'cause we both know how it goes",
"I don't want things to change, I ".$someVerbs[4]." they stay the same always",
"And I don't care if you're with somebody else",
"I'll ".$someVerbs[5]." you time and ".$someNouns[1].", just know I'm not a phase",
"I'm always, ways, ways",
"Always, ways, ways",
"I'm always, ways, ways"
];

#Verse2
$verse2Arr=[
$someAdjs[0]." lady, used to ".$someVerbs[6]." with me",
"Down Bloor ".$someNouns[6].", oh, what a time",
"And I still ".$someVerbs[7]." the fussin', the fightin', the loving, the lyin'",
"It's all ".$someAdjs[1].", you'll ".$someAdjs[3]." be mine"
];

#Bridge
$bridgeArr=[
"Always, you can count on it, sure as the ".$someNouns[2]." in the sky",
"Always, you can count on it, sure as the ".$someNouns[3]." will rise",
"Always, my ".$mainLove." for you ain't goin' nowhere",
"Always, I will be here"
];

$type1="3"*2;
$type2="5"+3;

$extraVar1=99;
$extraVar2="oops";
$extraVar3=$type1*$type2;
$unusedVar="leftover";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?=$songName?> - <?=$artistName?></title>
        <style>
        body{font-family:Arial ;padding:20px;background:#f8f8f8}
        h1{margin-bottom:5px }
        .section{margin:20px 0 }
        .label{font-weight:bold;margin-bottom:4px}
        pre{background:#fff;padding:10px;border-radius:5px;white-space:pre-wrap;}
        </style>
        </head>
        <body>
            
        <h1><?=$songName?> — <?=$artistName?></h1>
        <p><i>Mood:</i> <?=$moodType?></p>
        
        <div class="section">
            <div class="label">Verse 1</div>
            <pre>
                <?php
                for($i=0;$i<count($verse1Arr);$i++){
                    $v=$verse1Arr[$i];
                    foreach([$v] as $line){echo $line."\n";}
                }
                ?>
                </pre>
            </div>
            
            <div class="section">
                <div class="label">Pre-Chorus</div>
                <pre><?= $preChorus."\n";?></pre>
            </div>
            
            <div class="section">
                <div class="label">Chorus ×<?=$totalRep?></div>
                <pre>
                    <?php
                    for($i=0;$i<$totalRep;$i++){
                        $x=0;
                        while($x<count($chorusArr)){
                            $line=$chorusArr[$x];
                            for($y=0;$y<1;$y++){
                                echo $line."\n";
                            }
                                $x++;
                            }
                        }
                        ?>
                        </pre>
                    </div>

                    <div class="section">
                        <div class="label">Verse 2</div>
                        <pre>
                            <?php
                            $k=0;
                            while($k<count($verse2Arr)){
                                $line=$verse2Arr[$k];
                                $tmpArr=[$line];
                                foreach($tmpArr as $l){echo $l."\n";}
                                $k++;
                            }
                            ?>
                            </pre>
                        </div>
                        
                        <div class="section">
                            <div class="label">Bridge</div>
                            <pre>
                                <?php
                                $b=0;
                                while($b<count($bridgeArr)){
                                    $line=$bridgeArr[$b];
                                    echo $line."\n";
                                    $b++;
                                }
                                ?>
                                </pre>
                            </div>
                            <p><b>Type juggling:</b> <?=$type1?>, <?=$type2?></p>
                            <p>Random vars: <?=$extraVar1?>, <?=$extraVar2?>, <?=$extraVar3?>, <?=$unusedVar?></p>
                        </body>
                        </html>
