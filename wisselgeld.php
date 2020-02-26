<?php 
function checkup($argv){
    if (!is_numeric($argv[1])){
        exit("dit is geen getal");
    }

$input = floatval($argv[1]);
define("geld",[
    100,
    50,
    20,
    10,
    5,
    2,
    1
]);


$input2 = floatval($argv[1]) * 100;
$input2 = substr($input2, -2,2);
$input2 = roundToAny5($input2);
define("geldt",
    [
    50,
    20,
    10,
    5]
);
euros($input);
centen($input2);
}


function euros($input){
foreach (geld as $soortgeld){
    if (floor($input / $soortgeld) > 0) {
        $euroaantal = floor($input / $soortgeld);
        echo $euroaantal . " x " . $soortgeld . " euro" . PHP_EOL;
        $input = $input - ($euroaantal * $soortgeld);  
        }
    }
}


function centen($input2){
foreach (geldt as $soortgeld){
    if(floor($input2 / $soortgeld) > 0) {
        $centaantal = floor($input2 / $soortgeld);
        echo $centaantal . " x " . $soortgeld . " cent" . PHP_EOL;
        $input2 = $input2 - ($centaantal * $soortgeld);  
        }
    }
}

function roundToAny5($e){
        $x = 5;
        return round($e / $x) * $x;
}
checkup($argv);

?>
