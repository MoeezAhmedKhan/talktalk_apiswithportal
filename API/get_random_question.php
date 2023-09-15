<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
        $cat_Id =  $_POST["id"];
        
        $query = "SELECT * FROM `questions` WHERE category_id = '$cat_Id'";
        $run = mysqli_query($conn,$query);
        $num = mysqli_num_rows($run);
        if($num > 0)
        {
            $question_arry = array();
            $rest_questions = array();
            while($arr = mysqli_fetch_array($run))
            {
                
                
               
                
                
                $temp_arr = 
                [
                    "id"=>$arr['id'],
                    "question"=>$arr['question'],
                    "answer"=>$arr['answer'],
                    "category_id"=>$arr['category_id'],
                ];
               array_push($question_arry,$temp_arr);
               array_push($rest_questions,$temp_arr);
            }
              $min=1;
             
                  $index = rand($min,$num);
                  
                  
                   $sqlZ = "SELECT `color_id`, `color_name`, `bgColor` FROM `colors`";
                $exec_sqlZ = mysqli_query($conn,$sqlZ);
                if( mysqli_num_rows($exec_sqlZ) > 0){
                    $colors_array = array();
                    while($arrZ = mysqli_fetch_array($exec_sqlZ)){
                        $tempZ = [
                            
                            "color_name"=>$arrZ['color_name'],
                            "bgColor"=>$arrZ['bgColor'],
                            ];
                            array_push($colors_array,$tempZ);
                    }
                }
                
         
             $data = ["status"=>true,
            "message"=>"Random Question found.",
            "data"=>$question_arry[$index-1],
            "other_questions"=>$rest_questions,
            "colors_data"=>$colors_array,
            ];
            echo json_encode($data);
            
        }
        else
        {
            $data = ["status"=>false,
            "message"=>"Not found.",
            "data"=>$question_arry,
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