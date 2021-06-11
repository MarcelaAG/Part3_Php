<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Part 3 PHP</title>
</head>
<body>
    <h1>Exercises Php Part 3</h1>
    <h2>Ex1</h2>
<?php
echo 'boolval of Marcela is cool: '.(boolval('Marcela is cool')? 'true' : 'false');
?>

    <h2>Ex2</h2>
    <?php
    function sayIt(){
        echo 'Marcela is cool';
    }
    sayIt();
    ?>
    <h2>Ex3</h2>
    <?php
     $truth1 = 'Marcela';
     $truth2 = 'is cool';
    function giveMeTwo(){
       global $truth1;
       global $truth2;
        echo $truth1. ' '. ' '.$truth2;
    }
    giveMeTwo();
    ?>
    <h2>Ex4</h2>
    <?php
 
    function whichIsGreater(){
    $randomNum1 = rand(1,15);
    $randomNum2 = rand(1,15);

    if($randomNum1 > $randomNum2){
        
        echo 'The first number is greater than the second one.'. $randomNum1.'> '. $randomNum2;
    }elseif($randomNum1 < $randomNum2){
        
        echo 'The first number is less than the second one.'.$randomNum1.'< '. $randomNum2;
    }else{
        
        echo 'Both numbers have equal value.'.$randomNum1.' = '. $randomNum2;
    }
    }
    whichIsGreater();
    ?>
    <h2>Ex5</h2>
    <?php
    function displayRandomMessage(){
        $message = 'Look at this AMAZING number:';
        $random = rand(1,100);
        echo $message. ' '. $random;
    }
    displayRandomMessage();
    ?>
    <h2>Ex6</h2>
    <?php
    function addThemUp(){
        $ini = 20;
        $mini = 30;
        $moe = 40;
        echo $ini + $mini + $moe;
    }
    addThemUp();
    ?>
</body>
</html>