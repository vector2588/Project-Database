<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");

    $Addtocart = $_POST['AddToCart'];
    $UserID = $_SESSION['ID'];

    $sql = "INSERT INTO orders (Order_ID,Status, Item_ID, Customer_ID) VALUES
    (NULL,'Sending','$Addtocart','$UserID')";

    mysqli_query($database, $sql) or die(mysqli_error($database));
    
?>
    <script>
        alert("Add Success");
        window.location.replace("LoginSuccess.php");
    </script>

    