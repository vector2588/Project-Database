<?php
    session_start();
    session_destroy();
    header("location: ../NOKMart/index.php");
?>