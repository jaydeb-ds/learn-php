<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Forms in php</h1>

    <!---------------------GET method-------------->
    <hr>
    <h2> GET method : </h2>

    <pre>
    <form action="welcome.php" method="GET">
            name :     <input type="text" name="username">

            Age :      <input type="number" name="age">

            password : <input type="password" name="password">
             
                        <input type="submit" value="submit">
    </form>
    </pre>
    <hr>
    <!---------------------------------------------->

    <!---------------POST-------------------------->
    <!-- in this method data flow with out the url -->

    <hr>
        <h2>POST method</h2>

        <pre>
            <form action="welcome.php" method="POST">
                 name of the student :   <input type="text" name="stdName">

                 age of the student  :   <input type="number" name="stdAge">

                 Course              :   <input type="radio" name="course" value="Bsc.IT" id="bit"> <label for="bit">Bsc.IT</label> <input type="radio" name="course" value="BBA" id="bba"> <label for="bba">BBA</label>  <input type="radio" name="course" value="BMLT" id="bmlt"> <label for="bmlt">BMLT</label>

                         <button>ENTER</button>
            </form>
        </pre>
    <hr>


    <pre>
        <form action="forms.php" method="GET">
            first number : <input type="text" name="n1">
            second number : <input type="text" name="n2">

            <input type="submit" value="submit">
        </form>
    </pre>

    <?php
    
        // echo $_GET["n1"] + $_GET["n2"];

        try {
        echo "the sum is : ";
        echo $_GET["n1"] + $_GET["n2"];
            
        } catch (\Throwable $th) {
            echo "";
        }
    ?>
</body>
</html>