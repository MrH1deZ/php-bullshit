<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
function init() {
    first_function();
    echo "<br>";
    calculate();
}

function first_function() {
    echo "This is the first function";
}


function calculate() {
    echo 432 + 463;
}

init();
?>
</body>
</html>