<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
        
        $query = "SELECT `id`,`category_name` FROM `questions_categories`";
        $run = mysqli_query($conn,$query);
        $num = mysqli_num_rows($run);
        if($num > 0)
        {
            $cat_arry = array();
            while($arr = mysqli_fetch_array($run))
            { 
                
                $temp_arr = 
                [
                    "category_id"=>$arr['id'],
                    "category_name"=>$arr['category_name'],
                ];
                array_push($cat_arry,$temp_arr);
            }
            
             $data = ["status"=>true,
            "message"=>"Category found.",
            "data"=>$cat_arry,
            ];
            echo json_encode($data);
            
        }
        else
        {
            $data = ["status"=>false,
            "message"=>"Category not found.",
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