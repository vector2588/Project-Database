<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");
?>

<html>
    <head>
        <title>Nok Mart</title>
    </head>
    <body>
        Login Admin success
        <form method="post" action="GoToAddItem.php">
            <input type="submit" name="additem_btn" value="Add Item">
        </form>
        <form method="post" action="GoToDeleteItem.php">
            <input type="submit" name="deleteitem_btn" value="Edit Item">
        </form>
        <form method="post" action="Logout.php">
            <input type="submit" name="logout_btn" value="Logout">
        </form>

    </body>
</html>  