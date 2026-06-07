<?php
    $conn = mysqli_connect("localhost:3307","root","","curd");

    if (!$conn) {
        echo "DB connection failed";
    }
    else
        {
            echo "DB connect";
        }

?>

<?php 
    // $id = $_GET["id"]

    if(isset($_GET["id"]))
        {
            $id = $_GET["id"];

            $query = "SELECT * FROM `student` WHERE id = $id";

            $data = mysqli_query($conn,$query);

            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";

            if($data)
                {
                    $row = mysqli_fetch_row($data);
                }
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
        }

?>

<?php
        if(isset($_POST['update']))
            {
                $id = $_POST["id"];
                $name = $_POST["name"];
                $dept = $_POST["dept"];
                $cgpa = $_POST["cgpa"];

                $updateQuery = "UPDATE `student` SET `id` = $id, `name` = '$name', `dept` = '$dept', `cgpa` = $cgpa WHERE `student`.`id` = $id";

                try {
                     $result = mysqli_query($conn,$updateQuery);
                     header("location:index.php?updated=successfully");
                    //  echo "<h1>data updated</h1>";
                } catch (\Throwable $th) {
                    echo "<h1>data is not updated</h1>";
                }
            }
    ?>


    <form method="POST" action="update.php" >
        <pre>
            id   : <input type="number" name="id" id="" value=<?php echo $row[0]?> >

            Name : <input type="text" require name="name" id="" value=<?php echo $row[1]?>>

            Dept : <input type="text" name="dept" id="" value=<?php echo $row[2]?>>

            cgpa : <input type="cgpa" name="cgpa" id="" value=<?php echo $row[3]?>>

            <input type="submit" name="update" value="UPDATE">
        </pre>
    </form>
