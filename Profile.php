<?php
    session_start();
?>
<!DOCTYPE html>
    <head>
        <title>Profile</title>
    </head>

    <body>
        <form method="post" action="GoToMain.php">
            <input type="submit" name="MainPage_btn" value="Back to main page">
        </form>
        <?php
            echo "Name          : "; echo $_SESSION['FirstName']." "; echo $_SESSION['LastName'];?><br><?php
            echo "Address       : ".$_SESSION["Address"];?><br><?php
            echo "Phone Number  : ".$_SESSION["Phone"];?><br><?php
        ?>
        <form method="post" action="ChangPass.php">
            <tr>
                <td>Change Password</td><br>
                <td><input type="password" name="ChangePass"></td>
            </tr><br>
            <tr>
                <td>Connfirm Password</td><br>
                <td><input type="password" name="ChangeConPass"></td>
            </tr><br>
                <td></td>
                <td><input type="submit" name="login_btn" value="Submit"></td>
            </tr>
        </form>
    </body>
</html>

