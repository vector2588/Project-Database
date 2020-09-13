<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");

    $ChangePass = $_POST['ChangePass'];
    $ChangeConPass = $_POST['ChangeConPass'];

    
    if (($ChangePass == NULL) || ($ChangeConPass == NULL)){
        ?>
            <script>
                alert("Please password form");
                window.location.replace("Profile.php");
            </script>
        <?php
    } else{ 
        $sql = "UPDATE customer SET Customer_Pass = '$ChangePass' WHERE Customer_ID = '".$_SESSION["ID"]."';";
        mysqli_query($database,$sql) or die(mysqli_error($database));
        ?>
            <script>
                alert("Change password success");
                window.location.replace("Profile.php");
            </script>
        <?php
    }
?>