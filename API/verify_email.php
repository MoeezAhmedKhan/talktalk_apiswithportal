<?php


if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{

 include('connection.php');


// $email = $_POST['email'];   
  $to = $_POST['email'];  
   $from = 'zeshanfaisal10@gmail.com';  
   // request variables // important
   $email_from = $from; 
   $email_subject =  "New OTP Message"; // The Subject of the email 
 
   $headers = "From: ".$email_from;
   

  if (empty($to))
  {
     $data = [
        "status"=>false,
        "message"=>"email is required",
             ];
         echo json_encode($data); 
  }
  else
  {
      
        $sql="SELECT `id` FROM `users` WHERE `email` = '$to'";
        $execute = mysqli_query($conn,$sql);
        if(mysqli_num_rows($execute) == 0)
        {
            
            $digits = 4;
            $OTP = rand(pow(10, $digits-1), pow(10, $digits)-1);
            $email_txt = "Your OTP code for talk talk is ".$OTP."";
            mail($to, $email_subject, $email_txt, $headers);
        
            $data = [
                        "OTP"=>$OTP,
                    ];
            $temp = [
                        "status"=>true,
                        "data"=>$data,
                        "message"=>"your OTP has been sent to your email address",
                    ];
             echo json_encode($temp);
             
           
        }
      else
      {
             $temp = [
                "status"=>false,
                "message"=>"email already exists",
            ];
          echo json_encode($temp);
      }
  }
  
}
else
{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
}
