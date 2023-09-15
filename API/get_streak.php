<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
        $user_id =  $_POST["user_id"];
        
        $query = "SELECT `id` as current_streak FROM `streak` WHERE `user_id` = '$user_id'";
        $run = mysqli_query($conn,$query);
       
        if($run){
            $num_streak = mysqli_num_rows($run);
        }
               
          
       $sql2 = "SELECT COUNT(*) max_streak 
  FROM 
     ( SELECT x.*
            , CASE WHEN @prev = date - INTERVAL 1 DAY THEN @i:=@i ELSE @i:=@i+1 END i
            , @prev:=date  
         FROM 
            ( SELECT DISTINCT date , user_id FROM streak ) x
         JOIN 
            ( SELECT @prev:=null,@i:=0 ) vars 
        ORDER 
           BY date
     ) a 
 GROUP 
    BY i 
 ORDER 
    BY max_streak DESC LIMIT 1";
    $run2 = mysqli_query($conn,$sql2);
    
    if($run2){
       $row = mysqli_fetch_array($run2); 
       
    }
    
    
    $sql3 = "SELECT COUNT(s.id) as top,s.user_id,u.name , u.profilepic FROM `streak` s  INNER JOIN `users` u ON u.id = s.user_id GROUP BY `user_id` ORDER BY user_id DESC LIMIT 3";
    $run3 = mysqli_query($conn,$sql3);
    if(mysqli_num_rows($run3) > 0){
        $data_array = array();
        $count = 3;
        while($rowz= mysqli_fetch_array($run3)){
            $temp = [
                "position"=>$count,
                "user_id"=>$rowz['user_id'],
                "user_name"=>$rowz['name'],
                "profile_pic"=>$rowz['profilepic'],
                ];
                
                array_push($data_array , $temp);
                $count--;
        }
    }
    
         $data = ["status"=>true,
                "message"=>"Streaks found successfully!",
                "current_streak"=>$num_streak != null ? $num_streak : 0,
                "longest_streak"=>$row['max_streak'] != null ? $row['max_streak'] : 0,
                "position_holders"=>$data_array
                ];
                echo json_encode($data); 
    
    }else
    {
        $data = ["status"=>false,
        "message"=>"Access denied"];
        echo json_encode($data); 
    }

?>