<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");

    $ItemID = $_POST['UpdateItem_btn'];
    $NewItemName = $_POST['name'];
    $NewItemType = $_POST['type'];
    $NewItemPrice = $_POST['price'];
    $NewPicture = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $UserID = $_SESSION['ID'];

    
    if (($NewItemName == NULL) || ($NewItemType == NULL) || ($NewItemPrice == NULL) || ($NewPicture == NULL)) {
        ?>
            <script>
                alert('Please fill all the form');
                window.location.replace("DeleteItem.php");
            </script>
        <?php
    }else if (($NewItemName != NULL) && ($NewItemType != NULL) && ($NewItemPrice != NULL) && ($NewPicture != NULL)){
        
        $sql = "UPDATE item SET Item_Name = '$NewItemName', Kind = '$NewItemType', Price = '$NewItemPrice', Picture_URL = '$NewPicture' WHERE Item_ID = '$ItemID';";
        
        mysqli_query($database, $sql) or die(mysqli_error($database));
        ?>
            <script>
                alert("Update success");
            </script>
        <?php
        header("location: ../NOKMart/DeleteItem.php");
    }
?>