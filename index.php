<?php

$sport = array("Football","Basketball","Voleyball","Handball");
//echo $sport[0];
//echo implode(" ", $sport)."<br>";
//echo end($sport)."<br>";
//echo count($sport)."<br>";
array_push($sport, "Golf");
array_pop($sport);
array_unshift($sport,  "Tennis");
array_shift($sport);
array_shift($sport);
$output1 = array_slice($sport,2);
$output2 = array_slice($sport,0,3);
var_dump($output1);
//var_dump($sport);

//$len = count($sport);
//for($i = 0; $i < $len; $i++){
    //echo $sport[$i], "\n";
//}


$myvalues = array(12,24,36,48);
var_dump(array_sum($myvalues));


?>