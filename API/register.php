<?php
 include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    
    $name= $_POST['name'];
    $username = $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $phone= $_POST['phone'];
    $social_id= $_POST['social_id'];
    $notification_token = $_POST['notification_token'];



  if (empty($name))
  {
      
     $data = ["status"=>false,
                "message"=>"Name is required",
             ];
         echo json_encode($data); 
         
  }
  else if(empty($email)) 
  {
      
    $data = ["status"=>false,
                "message"=>"email is required",
             ];
         echo json_encode($data);
         
  }
  else if(empty($password)) 
  {
      
    $data = ["status"=>false,
                "message"=>"password is required",
             ];
         echo json_encode($data); 
         
  }
  else if(empty($phone)) 
  {
      
    $data = ["status"=>false,
                "message"=>"phone is required",
             ];
         echo json_encode($data); 
         
  }
  else
  {
      
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
     {
         
        $data = ["status"=>false,
                "message"=>"Invalid email format.",
                "data"=>$temp];
        echo json_encode($data);
        
     }
     else
     {

        $check_if_dataisin_db="SELECT `id` FROM `users` WHERE `email` = '$email'";
        $execute = mysqli_query($conn,$check_if_dataisin_db);
  
        if(mysqli_num_rows($execute) == 0)
        {
            
            $insert_user = "INSERT INTO `users`(`social_id`, `name`, `username`, `email`, `password`, `phone`, `notification_token`) 
            VALUES ('$social_id','$name','$username','$email','$password','$phone','$notification_token')";
            $result = mysqli_query($conn,$insert_user);
            
            if($result)
            {
                
              $last_id = $conn->insert_id;
              $temp = [
                       "user_id"=> $last_id,
                       "role"=> $role,
                       "name"=>$name,
                       "username"=>$username,
                       "password"=>$password,
                        "email"=> $email,
                        "phone"=>$phone,
                        "social_id"=>$social_id,
                        ];
                        
              $data = ["status"=>true,
                    "message"=>"user has been registered sucessfully.",
                    "data"=>$temp];
              echo json_encode($data);   
          }
          else
          {
              
             $data = ["status"=>false,
                    "message"=>"there was some error while registering"];
             echo json_encode($data);   
          }
      
    }
    else
    {
      
          $data = ["status"=>false,
                    "message"=>"email already exists"];
          echo json_encode($data);
      
     }
      
    }
  }
}
else
{
      $data = ["status"=>false,
                "Response_code"=>403,
                "Message"=>"Access denied"];
      echo json_encode($data);          
}

  
  
  

  

 


?>