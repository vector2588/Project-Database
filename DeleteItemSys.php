<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");

    $DeleteItem = $_POST['DeleteItem_btn'];

    $sql = "DELETE FROM item WHERE Item_ID = $DeleteItem";

    mysqli_query($database, $sql) or die(mysqli_error($database));
    
?>
    <script>
        alert("Delete Success");
        window.location.replace("DeleteItem.php");
    </script>
