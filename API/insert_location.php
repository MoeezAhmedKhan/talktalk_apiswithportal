<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
    
    $user_id = $_POST['user_id'];
    $country = $_POST['country'];

    
    $sql_check = "SELECT `id`, `user_id`, `country` FROM `location` WHERE user_id = $user_id";
    $exec_check = mysqli_query($conn , $sql_check);
    $rows = mysqli_num_rows($exec_check);
    if($rows > 0)
    {
        
        $sql_update = "UPDATE `location` SET `country`= '$country' WHERE `user_id`= $user_id";
        $exec_update = mysqli_query($conn,$sql_update);
        
        if($exec_update)
        {
              $data = ["status"=>true,
              "Response_code"=>200,
              "Message"=>"Location updated successfully!"];
              echo json_encode($data);
        }
        else
        {
              $data = ["status"=>false,
                "Response_code"=>202,
                "Message"=>"Something went wrong!"];
              echo json_encode($data);
        }
        
    }
    else
    {
        $sql = "INSERT INTO `location`(`user_id`, `country`) VALUES ('$user_id','$country')";
        $exec = mysqli_query($conn , $sql);
        
        if($exec)
        {
              $data = ["status"=>true,
              "Response_code"=>200,
              "Message"=>"Location recorded successfully!"];
              echo json_encode($data);
        }
        else
        {
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