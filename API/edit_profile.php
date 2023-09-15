<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
  
    $user_id  = $_POST['user_id'];    
    $name = $_POST['name'];  
    $phone = $_POST['phone'];
    $email = $_POST['email'];
  
    $new_password = $_POST['password'];
    
    $target_dir = "uploads/";
    $fileName = rand()."_".basename($_FILES["avatar"]["name"]);
    $target_file = $target_dir . $fileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    

        if(move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)){
            $newImg= $fileName;
        }
        
        
        
        
        $select_user = "SELECT `id`, `email`,`password`,`social_id` FROM `users` WHERE `id` = '$user_id' ";
        $execute_select_user = mysqli_query($conn,$select_user);
        
            if(mysqli_num_rows($execute_select_user) > 0){
            
                $user_data = mysqli_fetch_array($execute_select_user);
                $user_id = $user_data['id'];
                $social_id = $user_data['social_id'];
                $user_update = "UPDATE `users` SET `email` = '$email' , `name` = '$name', `phone` = '$phone', `password` = '$new_password', `profilepic` = '$newImg' WHERE `id` = '$user_id'";
                $execute_update = mysqli_query($conn,$user_update);
                
                if($execute_update){
                    
                    $temp = [
                      "user_id"=>$user_id,
                      "name"=>$name,
                      "email"=>$email,
                      "phone"=>$phone,
                      "social_id"=>$social_id,
                      "password"=>$new_password,
                      "avatar" => $newImg,
                        ];
                    $data = ["status"=>true,
                      "message"=>"your profile has been updated successfully.",
                      "data"=>$temp];
                    echo json_encode($data);
                    
                }else{
                    $data = ["status"=>false,
                             "message"=>"cannot update your profile"];
                    echo json_encode($data);
                }
                
            }else{
                $data = ["status"=>false,
                    "message"=>"there was a problem while updating profile"];
                echo json_encode($data);
            }
            

        

    
    
    
    
}else{
   $data = ["status"=>false,
            "message"=>"Access denied"];
   echo json_encode($data); 
}



?>