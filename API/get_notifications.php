<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
     
        $data_array= array();
        
        $query = "SELECT `id`, `title`, `description` FROM `notifications`";
        $run = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($run)){
                          $temp = [
                       "title"=>$row['title'],
                        "description"=>$row['description'],  
                    ];
                array_push($data_array,$temp);  
        }


            
             $data = ["status"=>true,
            "message"=>"notification content found successfully!",
            "data"=>$data_array
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