<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CURD operation in PHP</h1>
    
    <?php
        $conn = mysqli_connect("localhost:3307", "root", "", "curd");

        if($conn) {
            echo "Database connect";
        }
        else 
        {
            echo "Database connection failed!!";
        }
    ?>

    <form method="POST">
        <pre>
            id   : <input type="number" name="id" id="">

            Name : <input type="text" require name="name" id="">

            Dept : <input type="text" name="dept" id="">

            cgpa : <input type="cgpa" name="cgpa" id="">

            <input type="submit" name="save" value="Save">
        </pre>
    </form>

    <?php
        if(isset($_POST['save']))
            {
                $id = $_POST["id"];
                $name = $_POST["name"];
                $dept = $_POST["dept"];
                $cgpa = $_POST["cgpa"];

                $insetQuery = "INSERT INTO `student` (`id`, `name`, `dept`, `cgpa`) VALUES ('$id', '$name', '$dept', '$cgpa')";

                try {
                     $result = mysqli_query($conn,$insetQuery);
                     echo "<h1>data inserted</h1>";
                } catch (\Throwable $th) {
                    echo "<h1>data is not inserted</h1>";
                }
            }
    ?>


    <?php
        $query = "SELECT * FROM `student`";

        $data = mysqli_query($conn,$query);

        if ($data) {
            echo "data fetched";
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
        }
    ?>

    <table border='1'>
        <thead>
            <th>__ID__</th>
            <th>_____Name____</th>
            <th>____Dept____</th>
            <th>___CGPA__</th>
        </thead>
        
        <?php
            while($row = mysqli_fetch_assoc($data)){
                // print_r($row);
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['dept']; ?></td>
                <td><?php echo $row['cgpa']; ?></td>
            </tr>

            <?php } ?>
        
    </table>


</body>
</html>