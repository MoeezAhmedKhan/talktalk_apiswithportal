<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
    
    $user_id = $_POST['user_id'];  
    $category_id = $_POST['category_id'];
    $question_id = $_POST['question_id'];  
    $elapsed_time = $_POST['elapsed_time'];
    
 
 
 $allowedExts = array("mp3", "ogg", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    // $check_if_dataisin_db = "SELECT * FROM `users` WHERE `email`= '$email' AND `password`='$password'";
    // $execute = mysqli_query($conn,$check_if_dataisin_db);
    
  if ((($_FILES["file"]["type"] == "audio/ogg")
||($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "audio/wma"))

&& ($_FILES["file"]["size"] < 50000)
&& in_array($extension, $allowedExts))
{
  if ($_FILES["file"]["error"] > 0)
    {
   // echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    // echo "Type: " . $_FILES["file"]["type"] . "<br />";
    // echo "Size: " . ($_FILES["file"]["size"]) . " Kb<br />";
    // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

      if(move_uploaded_file($_FILES["file"]["tmp_name"],"audios/" . $_FILES["file"]["name"])){
          
        //   echo "Stored in: " . "audios/" . $_FILES["file"]["name"] . "<br />";
        //   echo "User ID: " .$user_id. "<br />";
        //   echo "Category ID: " .$category_id. "<br />";
        //   echo "Question ID: " .$question_id. "<br />";
        //   echo "Elapsed Time: " .$elapsed_time. "<br />";
        $data = ["status"=>true,
            "Response_code"=>200,
            "Message"=>"Answer uploaded successfully"];
        echo json_encode($data);
  
  
      }
      
      
    }
  }
  


}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
 }

?>