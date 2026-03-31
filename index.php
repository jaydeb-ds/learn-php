<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <!-------- first code in PHP -------->
    <?php
        echo "jaydeb";
        echo "<br/>";
        echo "<h1> jaydeb </h1>"
    ?>
    
    <!----------- Comments --------->
     <?php
        // single line comment
        
       /* multiple 
        line 
        comment */
     ?>

    <!-------- Data type and variable-------->
    
    <?php 
    $name = "jaydeb";
    $age = 21;
    $cgpa = 7.83;
    $pass = true;

    echo " name : $name | age : $age | cgpa : $cgpa | pass : $pass ";
    ?>

    <!------------Operators--------------->

    <?php
    echo "<br/> <h1> operators </h1> <br/>";

    $a = 20;
    $b = 10;
    
        echo " a = $a , b = $b";

        echo "<br/> addition = ",  $a + $b;
        echo "<br/> subtraction = ", $a - $b;
        echo "<br/> divition = ", $a / $b;
        echo "<br/> multiplication = ", $a + $b;
        echo "<br/> modulus = ", $a % $b;
        echo "<br/> exponentiation = ", $a ** $b;
        echo "<br/>";

        echo 1===4; 
    ?>


</body>
</html>