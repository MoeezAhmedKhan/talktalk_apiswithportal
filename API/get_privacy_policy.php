<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
     
        
        $query = "SELECT `p_id`, `p_content` FROM `privacy_policy`";
        $run = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($run);

            
             $data = ["status"=>true,
            "message"=>"privacy policy content found successfully!",
            "data"=>$row['p_content'],
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