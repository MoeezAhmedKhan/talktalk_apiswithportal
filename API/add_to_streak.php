<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
    
    $user_id = $_POST['user_id'];   
    $date = date("Y-m-d");

    

    $sql_check = "SELECT `id`, `user_id`, `date` FROM `streak` WHERE `user_id` = '$user_id' AND `date` = '$date'";
    $exec_check = mysqli_query($conn , $sql_check);
    
    if(mysqli_num_rows($exec_check) > 0){
        
        $data = ["status"=>true,
            "Response_code"=>200,
            "Message"=>"Streak already recorded successfully!"];
    echo json_encode($data);
        
    }else{
    $sql = "INSERT INTO `streak`(`user_id`) VALUES
            ('$user_id')";
    $exec = mysqli_query($conn , $sql);
    
    if($exec){
          $data = ["status"=>true,
            "Response_code"=>200,
            "Message"=>"Streak recorded successfully!"];
  echo json_encode($data);
    }else{
          $data = ["status"=>false,
            "Response_code"=>202,
            "Message"=>"Something went wrong!"];
  echo json_encode($data);
    }

}

}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
 }

?>