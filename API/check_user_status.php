<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
        $user_id =  $_POST["user_id"];
        
        $query = "SELECT * FROM `users` WHERE id = $user_id";
        $run = mysqli_query($conn,$query);
        $num = mysqli_num_rows($run);
        if($num > 0)
        {
            while($arr = mysqli_fetch_array($run))
            {
                 $temp =
                    [
                        "user_status"=> $arr['status'],
                    ];
            }
            
            
             $data = ["status"=>true,
            "message"=>"user status found successfully",
            "data"=>$temp,
            ];
            echo json_encode($data);
            
        }
        else
        {
            $data = ["status"=>false,
            "message"=>"user does'nt exist!",
            "data"=>$cat_arry,
            ];
            echo json_encode($data);
        }
        
    }
    
    else
    {
        $data = ["status"=>false,
        "message"=>"Access denied"];
        echo json_encode($data); 
    }

?>