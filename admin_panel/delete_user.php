<?php

    session_start();
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == '1')
    {
        header("location:index.php");
    }
    else
    {
        require_once("connection.php");
        $Id = $_GET["id"];
        $delete = "DELETE FROM `users` WHERE id = $Id;";
        $delete .= "DELETE FROM `privelages_bt` WHERE user_id = $Id";
        mysqli_multi_query($conn,$delete);
        header("location:manageusers.php");
    }

?>
