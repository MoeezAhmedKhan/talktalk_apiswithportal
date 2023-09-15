<?php
if ($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC') {
    include("connection.php");

    $user_id = $_POST['user_id'];
    $email = "user" . rand() . "_" . date('Ymdis') . "@gmail.com";
    $sql = "UPDATE `users` SET `email`='$email',`notification_token`='#', `status`='deleted' WHERE `id`= '$user_id'";
    $exec = mysqli_query($conn, $sql);

    if ($exec) {
        
        $sql2 = "DELETE FROM `location` WHERE `user_id` = '$user_id'";
        $exec2 = mysqli_query($conn, $sql2);
        
        $data = [
            "status" => true,
            "Response_code" => 200,
            "Message" => "Account deleted successfully"
        ];
        echo json_encode($data);
    } else {
        $data = [
            "status" => false,
            "Response_code" => 202,
            "Message" => "Something went wrong, Please try later"
        ];
        echo json_encode($data);
    }
} else {
    $data = [
        "status" => false,
        "Response_code" => 403,
        "Message" => "Access denied"
    ];
    echo json_encode($data);
}