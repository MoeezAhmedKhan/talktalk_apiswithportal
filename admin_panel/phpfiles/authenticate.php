<?php

session_start();
require_once("../assets/connection.php");
 if(isset($_POST['submitLogin']))
 {
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $chk_email = "SELECT * FROM `users` WHERE `email` = '$email'";
    $exe_email = mysqli_query($conn,$chk_email);
    $email_rows = mysqli_num_rows($exe_email);
    if($email_rows > 0)
    {
        $chk_pass = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password'";
        $exe_pass = mysqli_query($conn,$chk_pass);
        $pass_rows = mysqli_num_rows($exe_pass);
        if($pass_rows > 0)
        {
            $data = mysqli_fetch_array($exe_pass);

            $userid = $data['id'];
            $user_type = $data['role_id'];
            $name = $data['name'];
            $status = $data['status'];
           
        
            
            if($user_type == '0' || $user_type == '1')
            {
                if($status == 'active')
                {
                    $_SESSION['userID'] = $userid;
                    $_SESSION['user_type'] = $user_type;
                    $_SESSION['user_name'] = $name;
                    $id = $_SESSION['userID'];
                    
    
                    ?>
                        <script>
                            window.location.href = "../index.php";
                        </script>
                    <?php
                }
                else
                {
                    ?>
                        <script>
                        alert("you can't login your account is suspended");
                            window.location.href = "../auth-login.php";
                        </script>
                    <?php
                }

            }
            else
            {
                ?>
                    <script>
                    alert("sorry you can't access");
                    window.location.href="../auth-login.php";
                    </script>
                <?php
            }
        }
        else
        {
            ?>
                <script>
                alert("Password is wrong");
                window.location.href="../auth-login.php";
                </script>
            <?php
        }
    } 
    else
    {
        ?>
                <script>
                alert("Email is wrong");
                window.location.href="../auth-login.php";
                </script>
        <?php
    }
}


?>