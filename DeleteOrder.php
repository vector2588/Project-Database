<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");

    $DeleteOrder = $_POST['DeleteOrder_btn'];

    $sql = "DELETE FROM orders WHERE Order_ID = $DeleteOrder";

    mysqli_query($database, $sql) or die(mysqli_error($database));
    
?>
    <script>
        alert("Delete Success");
        window.location.replace("Order.php");
    </script>

    