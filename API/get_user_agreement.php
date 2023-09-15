<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
     
        
        $query = "SELECT `a_id`, `a_content` FROM `agreement`";
        $run = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($run);

            
             $data = ["status"=>true,
            "message"=>"content found successfully!",
            "data"=>$row['a_content'],
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