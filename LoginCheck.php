<?php
    session_start();
    $database = mysqli_connect("localhost","root","natkamol555","nokmart");
    
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];

    if (($email == NULL) || ($pass == NULL)){
        ?>
            <script>
                alert("Please fill all form");
                window.location.replace("Login.php");
            </script>
        <?php
    } else{ 
        $sql = "SELECT * FROM customer WHERE Email = '$email' and Customer_Pass = '$pass'";
        $row = mysqli_query($database,$sql) or die(mysqli_error($database));
        $Key = mysqli_fetch_array($row);
    }

    if (!$Key){
        ?>
            <script>
                alert("Please put a correct Email/Password");
                window.location.replace("Login.php");
            </script>
        <?php
    } else {
        $_SESSION["ID"]         = $Key["Customer_ID"];
        $_SESSION["FirstName"]  = $Key["First_Name"];
        $_SESSION["LastName"]   = $Key["Last_Name"];
        $_SESSION["Address"]    = $Key["Address"];
        $_SESSION["Email"]      = $Key["Email"];
        $_SESSION["Password"]   = $Key["Customer_Pass"];
        $_SESSION["Phone"]      = $Key["Phone_Number"];
        if($Key['Status'] == 'A'){
            ?>
            <script>
                alert("Log in success");
                window.location.replace("AdminPage.php");
            </script>
            <?php
            session_write_close();
        }
        else {
        ?>
            <script>
                alert("Log in success");
                window.location.replace("LoginSuccess.php");
            </script>
        <?php
        session_write_close();
        }
    }
?>