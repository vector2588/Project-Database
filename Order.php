<?php
    session_start();
?>
<!DOCTYPE html>
    <head>
        <title>Order</title>
    </head>
    <body>
        <form method="post" action="GoToMain.php">
            <input type="submit" name="MainPage_btn" value="Back to main page">
        </form>
        <h1>My Order</h1>

        <?php
            $database = mysqli_connect("localhost","root","natkamol555","nokmart");

            $sql = "SELECT * FROM orders INNER JOIN item ON orders.Item_ID = item.Item_ID WHERE Customer_ID = '".$_SESSION['ID']."' ;";
            $result = mysqli_query($database,$sql);
        ?>

        <table>
            <tr>
                <td>Picture</td>
                <td>Name</td>
                <td>Status</td>
                <td>Item ID</td>
                <td>Customer ID</td>
            </tr>

        <?php
            while ($row = mysqli_fetch_array($result)) {
                $ItemName = $row['Item_Name'];
                $Status = $row['Status'];
                $ItemID = $row['Item_ID'];
                $CusID = $row['Customer_ID'];
                $OrderID = $row['Order_ID'];
        ?>
        <tr>
            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['Picture_URL']).'" alt="Image" style="width: 100px; height: 100px;" >'?></td>
            <td><?php echo $ItemName?></td>
            <td><?php echo $Status?></td>
            <td><?php echo $ItemID?></td>
            <td><?php echo $CusID?></td>
            <td>
                <form action="DeleteOrder.php" method="POST" id="DeleteOrder" >
                    <button type="submit" name="DeleteOrder_btn" onclick="document.getElementById('DeleteOrder')" value="<?php echo $OrderID?>">
                        Delete
                    </button>
                </form>
            </td>
        </tr>

        <?php
            }   
        ?>    
            </table>
        
    </body>
</html>