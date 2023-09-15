<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
        
        $user_id = $_POST['user_id'];
        
        $sql = "SELECT `id`, `user_id`, `title`, `description`, `status`, `created_at` FROM `notifications` WHERE `user_id` = '$user_id' ORDER BY `id` DESC";
        $exec = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($exec) > 0){
            $data_array = array();
            
            while($row = mysqli_fetch_array($exec)){
                
                $temp = [
                    "id"=>$row['id'],
                    "title"=>$row['title'],
                    "description"=>$row['description'],
                    "status"=>$row['status'],
                    "created_at"=>time_elapsed_string($row['created_at'])
                    ];
                    
                    
                    array_push($data_array, $temp);
                
            }
            
        $data = ["status"=>true,
        "message"=>"Notifications fetched successfully!",
        "data"=>$data_array
        ];
        echo json_encode($data);     
            
            
            
            
        }else{
        $data = ["status"=>true,
        "message"=>"No Notifications to show!",
        // "data"=>[]
        ];
        echo json_encode($data);  
        }
    
    }else{
        $data = ["status"=>false,
        "message"=>"Access denied"];
        echo json_encode($data); 
    }
    
    function time_elapsed_string($datetime, $full = false) {
//      $IST = new DateTime($datetime, new DateTimeZone('UTC'));

//     // change the timezone of the object without changing it's time
//     $IST->setTimezone(new DateTimeZone('Asia/Kolkata'));

//     // format the datetime
//   $zzzDate =  $IST->format('Y-m-d H:i:s T');
   
   
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

?>