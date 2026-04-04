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

        $num = [1,2,34,5,6,7,8];
        $word = array("Sudrisna", "barnita", "Arpita", "ananya");

        echo "boys $num[0] and $num[2] <br/>";
        echo " girls $word[0] and $word[1]";

        

        //------- Associative Array--------

        echo " <h3>Associative array </h3>";


        $std = [
            "name" => "jaydeb",
            "course" => "Bsc.IT",
            "age " => 21,
            "Cgpa" => 7.83,
            "pass" => true
        ];

        echo $std["name"] . "<br/>";
        $keys  = array_keys($std);

        echo "<br/> $keys[0] , $keys[1]";

        foreach($std as $s)
            {
                echo "<br/>";
                echo $s;
            }
        
        foreach ($std as $k => $v)
            {
                echo "<br/>";

                echo "$k : $v";
            }

        // --------Multidimention Array--------

        $stds = [
            ["jaydeb",21, 7.8,true],
            ["subha",22, 9.4, false],
            ["rudra",18, 7.4, true],
            ["acp",22, 8.4, false]
        ];

        echo "<br/>heighest CGPA ". $stds[1][2] ;

        
        echo "<br/>";
        foreach($stds as $s)
            {

                echo  "<br/>".$s[1];
            }

    ?>

    <!--------Functions-------------->

    <h1>Funtions</h1>

    <?php 
        
        //-----Simple Function------
        function hello()
        {
            echo " hello <br/>";
        }

        hello();

        //------Function with Parameters-----
        function greet($name)
        {
            echo "hellow $name <br/>";
        }

        greet("jaydeb");

        //-----Function with Return Value-----
        
        function add($a, $b)
        {
            return $a + $b;
        }

        $result = add(10, 22);

        echo "$result <br/>";

        //------Default Parameters----

        function guest($name = "User")
        {
            echo "Hello $name <br/>";
        }

        guest();
        guest("Jaydeb");

        //------Function with Array-----

        function printArray($arr)
        {
            foreach($arr as $a)
                {
                    echo "value $a <br/>";
                }
        }

        $num = [1,4,2,3,5];

        printArray($num);
    ?>
    <h1>forms </h1>
        <br/>
    
    <button>
        <a href="forms.php">Go to Forms</a>
    </button>

    <?php
        include("navbar.php")
    ?>
</body>
</html>