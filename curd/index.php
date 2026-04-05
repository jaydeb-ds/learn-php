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
        $query = "SELECT * FROM `student` ORDER BY cgpa ASC";

        $data = mysqli_query($conn,$query);

        if ($data) {
            echo "data fetched";
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
        }
    ?>

    <!-- delete  -->
     <?php
            // function delete($id)
            // {

            //     // echo "<h2>------delete----------</h2>";
            //     $delQuery = "DELETE FROM `student` WHERE id = $id";
            //     $data = mysqli_query($conn,$delQuery);

            //     if($data)
            //         {
            //             // echo "<pre>"
            //             // print_r($data);
            //             // echo "</pre>"
                        
            //             echo "<h2>------delete----------</h2>";  
            //         }
            // }
            // delete();

            if(isset($_POST["delete"]))
                {
                    $id = $_POST["delete"];
                    // delete($id);
                     $delQuery = "DELETE FROM `student` WHERE id = $id";
                    $delData= mysqli_query($conn,$delQuery);

                    if ($delData) {
                            echo "<pre>";
                            echo $delData;
                            echo "</pre>";
                            echo "<h2>------delete----------</h2>";

                            $data = mysqli_query($conn,$query);
                            if($data)   
                                {
                                    echo "<h1>data fetch after delete</h1>";
                                }
                    }
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

                <!-- Updata Button-->
                <td><a href="update.php?id=<?php echo $row['id']; ?>"><button>UPDATE</button></a></td>
                <!-- delete Button -->
                <td>
                    <form method="POST">
                        <button type="submit" value=<?php echo $row["id"] ?> name="delete">DELETE</button>
                    </form>
                </td>
            </tr>

            <?php } ?>
        
    </table>


</body>
</html>