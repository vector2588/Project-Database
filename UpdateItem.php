<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");
    $ItemID = $_POST['UpdateItem_btn'];
?>
<!DOCTYPE html>
    <head>
        <title>Nok mart</title>
    </head>
    <body>
        <form method="post" action="GoToDeleteItem.php">
            <input type="submit" name="EditPage_btn" value="Back to edit page">
        </form>
        <h1>Update</h1>

        <?php
            $sql = "SELECT * FROM item WHERE Item_ID = $ItemID;";
            $result = mysqli_query($database,$sql);
            $row = mysqli_fetch_array($result);
        ?>

        <table>
            <tr>
                <td>Picture</td>
                <td>Name</td>
                <td>Type</td>
                <td>Price</td>
            </tr>
        <?php
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
            </tr>
        </table>

        <form action="UpdateItemSys.php" method="POST" id="UpdateItem" enctype="multipart/form-data">
        
        <label>Enter item name:</label><br>
        <input type="text" name="name" placeholder="Enter item name"/><br>

        <label>Enter type:</label><br>
        <input type="text" name="type" placeholder="Enter item type"/><br>

        <label>Enter the price:</label><br>
        <input type="text" name="price" placeholder="Enter item price"/><br>

        <label>Choose a Picture :</label><br>
        <input type="file" name="image" id="image"/><br><br>
        <button type="submit" name="UpdateItem_btn" onclick="document.getElementById('UpdateItem')" value="<?php echo $ItemID?>">
            Update
        </button>

    </form>
    </body>
</html>