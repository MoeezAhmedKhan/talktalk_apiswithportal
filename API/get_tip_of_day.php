<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
        // $today_date = date("Y-m-d");
        $query = "SELECT `id`, `tip`, `created_at` FROM `tip_of_day` ORDER BY RAND() LIMIT 1";
        $run = mysqli_query($conn,$query);
        $num = mysqli_num_rows($run);
        if($num > 0)
        {
            $cat_arry = array();
            while($arr = mysqli_fetch_array($run))
            { 
                
                $temp_arr = 
                [
                    "tip_id"=>$arr['id'],
                    "tip"=>$arr['tip'],
                ];
                array_push($cat_arry,$temp_arr);
            }
            
             $data = ["status"=>true,
            "message"=>"Tip found.",
            "data"=>$temp_arr,
            ];
            echo json_encode($data);
            
        }
        else
        {
            $data = ["status"=>false,
            "message"=>"Tip not found.",
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