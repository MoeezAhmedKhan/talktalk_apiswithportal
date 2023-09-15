<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
        $cat_Id =  $_POST["id"];
        
        $query = "SELECT `id`, `category_name`, `created_at`, `updated_at` FROM `questions_categories`";
        $run = mysqli_query($conn,$query);
        $num = mysqli_num_rows($run);
        if($num > 0)
        {
            $cat_arry = array();
            while($arr = mysqli_fetch_array($run))
            {
                
                $query2 = "SELECT `id`, `question`, `answer`, `category_id` FROM `questions` where `category_id`= '$cat_Id'";
                $exec = mysqli_query($conn,$query2);
                $row = mysqli_num_rows($exec);
                if($row > 0)
                {
                    $question_arr = array();
                    while($ary = mysqli_fetch_array($exec))
                    {
                        $temp2_arr =
                        [
                            "question"=>$ary['question'],
                        ];
                        array_push($question_arr,$temp2_arr);
                    }
                }
                
                
                
                $temp_arr = 
                [
                    "value"=>$arr['id'],
                    "label"=>$arr['category_name'],
                    "questions_data"=>$question_arr,
                ];
                array_push($cat_arry,$temp_arr);
            }
            
             $data = ["status"=>true,
            "message"=>"Specials Id and Name found.",
            "data"=>$cat_arry,
            ];
            echo json_encode($data);
            
        }
        else
        {
            $data = ["status"=>false,
            "message"=>"Specials Category found.",
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