<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");
?>

<html>
    <head>
        <title>Nok Mart</title>
    </head>
    <body>
        Login success
        <form method="post" action="GoToProfile.php">
            <input type="submit" name="profile_btn" value="Profile">
        </form>
        <form method="post" action="GoToOrder.php">
            <input type="submit" name="order_btn" value="My order">
        </form>
        <form method="post" action="Logout.php">
            <input type="submit" name="logout_btn" value="Logout">
        </form>
        
        <h1>Product</h1>
        <p>Our product today</p>

        <?php
            $sql = "SELECT * FROM item;";
            $result = mysqli_query($database,$sql);
        ?>

        <table>
            <tr>
                <th>Picture</th>
                <th>Name</th>
                <th>Price</th>
            </tr>

        <?php
            while ($row = mysqli_fetch_array($result)) {
                $ItemName = $row['Item_Name'];
                $ItemPic = $row['Picture_URL'];
                $ItemPrice = $row['Price'];
                $ItemID = $row['Item_ID'];
        ?>

        <tr>
            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['Picture_URL']).'" alt="Image" style="width: 100px; height: 100px;" >'?></td>
            <td><?php echo $ItemName?></td>
            <td><?php echo $ItemPrice?></td>
            <td>
                <form action="AddToCart.php" method="POST" id="addtocart" >
                    <button type="submit" name="AddToCart" onclick="document.getElementById('addtocart')" value="<?php echo $ItemID?>">
                        Add to cart
                    </button>
                    <?php $_SESSION['ItemPic'] = $ItemPic?>
                </form>
            </td>
        </tr>

        <?php
            }   
        ?> 

        </table>
    </body>
</html>