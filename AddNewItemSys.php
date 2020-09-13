<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");
    
    if(isset($_POST['upload'])){
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $ItemName = $_POST['name'];
        $ItemType = $_POST['type'];
        $ItemPrice = $_POST['price'];

        $query = "INSERT INTO item (Item_ID,Item_Name,Type,Price,Picture_URL) VALUES (NULL,'$ItemName','$ItemType','$ItemPrice','$file');";
        $query_run = mysqli_query($database,$query) or die(mysqli_error($database));

        if($query_run){
            echo '<script type="text/javascript"> alert("Image Upload success")</script>';
        }
        else {
            echo '<script type="text/javascript"> alert("Image Upload not success")</script>';
        }
    }
    ?>
    <script>
        window.location.replace("AddNewItem.php");
    </script>
    <?php
?>