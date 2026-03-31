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

    $a = 24  ;
    $b = 10;
    
        echo " a = $a , b = $b";

        echo "<br/> addition = ",  $a + $b;
        echo "<br/> subtraction = ", $a - $b;
        echo "<br/> divition = ", $a / $b;
        echo "<br/> multiplication = ", $a * $b;
        echo "<br/> modulus = ", $a % $b;
        echo "<br/> exponentiation = ", $a ** $b;
        echo "<br/>";

        echo 1===4; 
    ?>

    <!--------- conditional statement  ---------->
    <br/>
    <h1> conditional statement </h1>
    <?php
        $age = 21;

        if($age < 18)
            {
                echo "not adult";
            }
        elseif($age >= 18 && $age <=50)
            {
                echo "Adult";
            }
        else 
            {
                echo "old";
            }

    // ternary opretator 

        $result= ($age >= 18) ? " voter" : " not a voter ";

        echo $result;
    ?>

    <!-----------Switch case------- -->

    <?php
            $num = 1;
            switch($num)
            {
                case 1:
                    echo "one";
                    break;
                case 2: 
                    echo "two";
                    break;
                case 3:
                    echo "three";
                    break;
                case "F":
                    echo "fail";
                    break;
                default:
                    echo "invalid number";
            }
    ?>
    

    <!-----------------loops-------------->

    <h1>loops </h1>

    <?php
        // for loops  

        for($i = 0; $i<=5; $i++)
            {
                echo "<br/> for loop $i";
            }
        
        // while loop

        $x = 0;
        while($x<=5)
            {
                echo "<br/> while loop $x";
                $x++;
            }

        // do while loop    
        $y = 0;
        do 
        {
            echo "<br/> do while $y";
            $y++;
        }while($y < 5);

        
        // for each loop

        $colors = ["Red", "Blue", "Green"];

        foreach($colors as $c){
            echo "<br/>$c";
        }
        
    ?>

    <!------------String------------>
    <h1>
        
    </h1>
    <?php
    $name = "jaydeb";

        echo "<br/>",strlen($name);        // length
        echo "<br/>",str_word_count($name); // word count
        echo "<br/>",strrev($name);        // reverse
        echo "<br/>",strtoupper($name);    // uppercase
        echo "<br/>",strtolower($name);    // lowercase
        echo "<br/>",$name[0];       
    ?>

    <!---------Array---------------->
    <h1>Array</h1>

    <?php
        //---- indexed Array----

        $std = ["jaydeb", "subha", "rudra","ACP"];
        $stdg = array("Sudrisna", "barnita", "Arpita", "ananya");

        echo "boys $std[0] and $std[2]";
        echo " girls $stdg[0] and $stdg[1]";

        
        
    ?>

</body>
</html>