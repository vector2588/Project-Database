<?php
    session_start();
?>

<html>
<head>
    <title>Nok Mart</title>
</head>
<body>
    <form method="post" action="GoToAdmin.php">
            <input type="submit" name="admin_btn" value="Back to main page">
    </form>

    <form action="AddNewItemSys.php" method="POST" enctype="multipart/form-data">
        
        <label>Enter item name:</label>
        <input type="text" name="name" placeholder="Enter item name"/><br>

        <label>Enter type:</label>
        <input type="text" name="type" placeholder="Enter item type"/><br>

        <label>Enter the price:</label>
        <input type="text" name="price" placeholder="Enter item price"/><br>

        <label>Choose a Picture :</label>
        <input type="file" name="image" id="image"/><br>
        
        <input type="submit" name="upload" value="Upload"/><br>
    </form>
    
</body>
</html>

