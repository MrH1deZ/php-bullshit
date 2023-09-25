<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function paramfunction($message) {

    echo $message;

}


function calculate($num1, $num2){
$sum = $num1 + $num2;
echo $sum;
}


paramfunction("Hello homie");
echo "<br>";
calculate(48, 48);
?>
</body>
</html>