<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
     
     $user_id = $_POST['user_id'];
     $mission_statement = $_POST['mission_statement'];
        
        $query = "UPDATE `users` SET `mission_statement`='$mission_statement'  WHERE `id`='$user_id'";
        $run = mysqli_query($conn,$query);


            if($run){
            $data = ["status"=>true,
            "message"=>"Status Added Successfully",
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