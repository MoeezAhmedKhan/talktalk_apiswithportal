<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    
    $sql = "SELECT `id`, `title` FROM `tip_title`";
    $exec = mysqli_query($conn , $sql);
    $rows = mysqli_num_rows($exec);
    if($rows > 0)
    {
        while($ar = mysqli_fetch_array($exec))
        {
            
            $tmp = 
            [
                "title"=>$title = $ar['title'],
            ];

        }
        $data = ["status"=>true,
                "Response_code"=>200,
                "Message"=>"Title Found",
                "data"=>$tmp];
        echo json_encode($data); 
    }
    else
    {
        $data = ["status"=>false,
                "Response_code"=>403,
                "Message"=>"No Title Found"];
        echo json_encode($data); 
    }


}
else
{
      $data = ["status"=>false,
                "Response_code"=>404,
                "Message"=>"Access denied!"];
      echo json_encode($data);          
}

?>