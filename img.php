<form action="img.php" method="POST" enctype="multipart/form-data">
    Select Image :
    <input type="file" name="img">
    <br>
    <input type="submit" name="upload" value="upload">
</form>

<?php
    $img = $_FILES["img"];
   
    if(isset($img))
        {
            echo "<pre>";
            print_r($img);
            echo "</pre>";
            
            $filename = $img["full_path"];
            $tempname  = $img["tmp_name"];
            move_uploaded_file($tempname,"uploads/" . $filename );
            $path = "uploads/".$filename;
            
            echo "<img src='$path' >";
            
        }
    else 
        {
            echo "No image";
        }
?>
