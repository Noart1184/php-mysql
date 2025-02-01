<?php
$num = -2;
    if($num < 0 ){
        echo "$num is less than 0 <br>";
    }else{
        echo "$num is bigger than 0 <br>";
    }

$age = 15;
if(($age > 12) && ($age<20)){
echo "You are a teenager <br>";
}   

$day = "Monday";
switch($day){
    case "Monday":
        echo "Start of the day <br>";
        break;
    case "Tuesday":
        echo "Lets get through the week <br>";
        break;
    case "Wednesday":
        echo "The middle of the week <br>";
        break;
    case "Thursday":
        echo "Almost there <br>";
        break;
    case "Friday":
        echo "Weekend is here <br>";
        break;
    default:
        echo "Invalid day <br>";
        break;

        #while loop
        $x = 1;
        while($x <= 5){
            echo "The number is: $x <br>";
            $x++;
        }
        $y = 1;
            do{
                echo "The number is: $y <br>";
                $y++;
            }while($y <=5);
          

}

?>