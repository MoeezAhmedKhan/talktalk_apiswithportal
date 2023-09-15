<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
     
        
        $query = "SELECT `oid`, `o_name`,`img` FROM `occasions`";
        $run = mysqli_query($conn,$query);
        $num = mysqli_num_rows($run);
        if($num > 0)
        {
            $cat_arry = array();
            while($arr = mysqli_fetch_array($run))
            {
                

                
                
                
                $temp_arr = 
                [
                    "occasion_id"=>$arr['oid'],
                    "occasion"=>$arr['o_name'],
                    "image"=>$arr['img'],
                ];
                array_push($cat_arry,$temp_arr);
            }
            
             $data = ["status"=>true,
            "message"=>"Occasions found successfully!",
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