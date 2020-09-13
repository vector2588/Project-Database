<?php
    include 'ConnectToDB.php';

    $name        = $_POST['name'];
    $lastname    = $_POST['lastname'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $password2   = $_POST['password2'];
    $address     = $_POST['address'];
    $phonenumber = $_POST['phonenumber'];

    if (($name == NULL) || ($lastname == NULL) || ($email == NULL) || ($password == NULL) || $password2 == NULL || $address == NULL || $phonenumber == NULL) {
        ?>
            <script>
                alert('Please fill all the form');
                window.location.replace("Register.php");
            </script>
        <?php
    }else if ($password != $password2){
        ?>
        <script>
            alert('Please fill same password');
            window.location.replace("Register.php");
        </script>
        <?php
    }else if ($name != NULL && $lastname != NULL && $email != NULL && $password != NULL && $password2 != NULL && $address != NULL && $phonenumber != NULL){
        $sql = "INSERT INTO customer(First_Name, Last_Name, Address, Email, Customer_pass, Phone_Number) VALUES('$name','$lastname','$address','$email','$password','$phonenumber')";
        mysqli_query($database, $sql);
        ?>
            <script>
                alert("Register success");
            </script>
        <?php
        header("location: ../NOKMart/index.php");
    }
?>
