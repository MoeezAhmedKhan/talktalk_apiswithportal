<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
  
    $user_id  = $_POST['user_id'];    


    $select_user = "UPDATE `notifications` SET `status`='read' WHERE `user_id` = '$user_id' ";
    $execute_select_user = mysqli_query($conn,$select_user);

    if($select_user){
           $data = ["status"=>true,
            "response_code"=>200,
            "message"=>"updated notification status"];
   echo json_encode($data);
    }else{
           $data = ["status"=>false,
            "response_code"=>202,
            "message"=>"Something went wrong"];
            echo json_encode($data);
    }
    
}else{
   $data = ["status"=>false,
            "message"=>"Access denied"];
   echo json_encode($data); 
}



?>