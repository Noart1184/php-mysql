<?php
$age = 15;

switch($age){
    case($age>= 0 && $age <18):
    echo "You are a minor <br>";
    break;
    case ($age>018 && $age <=25 ):
        echo "You are a young adult <br>";
        break;
        case ($age > 25):
            echo "You are an adult <br>"
            break;
            default:
            echo "invalid age input <br>";
            break;
}

?>