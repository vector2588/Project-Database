<?php
    session_start();
?>
<!DOCTYPE html>
    <head>
        <title>Nok mart</title>
    </head>
    <body>
        <form method="post" action="GoToAdmin.php">
            <input type="submit" name="AdminPage_btn" value="Back to main page">
        </form>
        <h1>Product</h1>

        <?php
            $database = mysqli_connect("localhost","root","natkamol555","nokmart");

            $sql = "SELECT * FROM item;";
            $result = mysqli_query($database,$sql);
        ?>

        <table>
            <tr>
                <td>Picture</td>
                <td>Name</td>
                <td>Type</td>
                <td>Price</td>
                
            </tr>

        <?php
            while ($row = mysqli_fetch_array($result)) {
                $ItemName = $row['Item_Name'];
                $ItemID = $row['Item_ID'];
                $ItemType = $row['Kind'];
                $ItemPrice = $row['Price'];
        ?>
        <tr>
            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['Picture_URL']).'" alt="Image" style="width: 100px; height: 100px;" >'?></td>
            <td><?php echo $ItemName?></td>
            <td><?php echo $ItemType?></td>
            <td><?php echo $ItemPrice?></td>
            <td>
                <form action="UpdateItem.php" method="POST" id="UpdateItem" >
                    <button type="submit" name="UpdateItem_btn" onclick="document.getElementById('UpdateItem')" value="<?php echo $ItemID?>">
                        Update
                    </button>
                </form>
            </td>
            <td>
                <form action="DeleteItemSys.php" method="POST" id="DeleteItem" >
                    <button type="submit" name="DeleteItem_btn" onclick="document.getElementById('DeleteItem')" value="<?php echo $ItemID?>">
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