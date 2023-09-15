<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
     
     $user_id = $_POST['user_id'];
     
        
        $query = "SELECT `mission_statement` FROM `users` WHERE `id` = '$user_id'";
        $run = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($run);

            
             $data = ["status"=>true,
            "message"=>"mission statement successfully!",
            "data"=>$row['mission_statement'],
            ];
            echo json_encode($data);
            
       
        
    }
    
    else
    {
        $data = ["status"=>false,
        "message"=>"Access denied"];
        echo json_encode($data); 
    }

?>