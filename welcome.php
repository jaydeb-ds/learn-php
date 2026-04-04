<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <!-- Data from the GET method -->
     <h1>Data from GET method</h1>
    <?php
        $name = $_GET["username"];
        $age = $_GET["age"];

        echo "welcome : $name <br/>";
        echo "age : $age <br/>";
    ?>

    <!-------Data from the POST method------>

    <h1>Data from the POST method</h1>
    <?php
        $name = $_POST["stdName"];
        $age = $_POST["stdAge"];
        $course = $_POST["course"];

        echo "<br/>Student name is : $name";
        echo "<br/>Student age is : $age";
        echo "<br/>Student course is : $course";
        
    ?>
    

</body>
</html>