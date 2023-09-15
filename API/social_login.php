<?php


if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
 $social_id = $_POST['social_id']; 
$notification_token =$_POST['notification_token'];

 include('connection.php');

 $sql = "SELECT * FROM `users` WHERE `social_id`= '$social_id'";

  $execute = mysqli_query($conn,$sql);
  if(mysqli_num_rows($execute) > 0){
       $user_data = mysqli_fetch_array($execute);
       $user_id = $user_data['id'];
       $sql_update = "UPDATE `users` SET `notification_token` = '$notification_token' WHERE `id` = $user_id";
       $execute_update = mysqli_query($conn,$sql_update);
       if($execute_update){
            $temp = [
                   "user_id"=>$user_data['id'],
                   "avatar"=>$user_data['profilepic'],
                   "name"=>$user_data['name'],
                   "phone"=>$user_data['phone'],
                   "email"=>$user_data['email'],
                   "user_status"=>$user_data['status'],
                   "social_id"=>$user_data['social_id']
                    ];
           $data = ["status"=>true,
                    "message"=>"logged in successfully.",
                    "data"=>$temp];
           echo json_encode($data);  
       }else{
            $data = ["status"=>false,
            "message"=>"Error"];
            echo json_encode($data);   
       }
      
      
  }else{
       $data = ["status"=>false,
                "message"=>"login failed"];
       echo json_encode($data);   
  }
  
  
  
  


}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
}

?>