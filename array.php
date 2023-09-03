<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $arrayType1 = array();
    $arrayType2 = []; // This is same as array() but it's a newer and short way.
    $numberList = array(54, 54, 62, 62, 734, 612, '312', 123, '<h1>Hello World</h1>');   // The array starts from 0 so the first number 0 is 54 and so on.//

    //echo $numberList[0];  //This will print 54 because there is 0 this is the first number of the array
    //print_r ($numberList); // This will print the whole array like it is 
     echo $numberList[8];

    ?>
</body>
</html>