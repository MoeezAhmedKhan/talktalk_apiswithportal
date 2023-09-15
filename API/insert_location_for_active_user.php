<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    
    // $my_array = array();
      $user_id = $_POST['user_id'];
      $long = $_POST['long'];
      $lat = $_POST['lat'];
      $start_time = $_POST['start_time'];
    
    
     $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://us1.locationiq.com/v1/reverse?key=pk.bd733b0aaf436f3ad0ef530a41ab5ee3&lat='.$lat.'&lon='.$long.'&format=json',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
   
    // array_push($my_array,$response);
    
     $newresp = json_decode($response, true);
     
    $Country = $newresp['address']['country'];
    
    
    
    
    
    $sql_check = "SELECT `id`, `user_id`, `country` FROM `location` WHERE user_id = $user_id";
    $exec_check = mysqli_query($conn , $sql_check);
    $rows = mysqli_num_rows($exec_check);
    if($rows > 0)
    {
        
        $sql_update = "UPDATE `location` SET `country`= '$Country',`status`= 'active',`start_time`='$start_time' WHERE `user_id`= $user_id";
        $exec_update = mysqli_query($conn,$sql_update);
        
        if($exec_update)
        {
              $data = ["status"=>true,
              "Response_code"=>200,
              "Message"=>"Location updated successfully."];
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
        $sql = "INSERT INTO `location`(`user_id`, `country`,`status`,`start_time`) VALUES ('$user_id','$Country','active','$start_time')";
        $exec = mysqli_query($conn , $sql);
        
        if($exec)
        {
              $data = ["status"=>true,
              "Response_code"=>200,
              "Message"=>"Location recorded successfully."];
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
    
    
    
    


}
else
{
      $data = ["status"=>false,
                "Response_code"=>403,
                "Message"=>"Access denied!"];
      echo json_encode($data);          
}

?>