<?php
include('connection.php');
session_start();
if(isset($_GET['FunctionName'])){
 if($_GET['FunctionName']=="ToggleCampaignPro"){
     $id = $_GET['id'];
     $status = $_GET['status'];
     if($status==1){
         $sql = "UPDATE `comingPro` SET `status`=0 WHERE `id`=$id";
         $result = mysqli_query($con,$sql);
         if($result){
             echo "Done";
         }
     }else{
         $sql = "UPDATE `comingPro` SET `status`=1 WHERE `id`=$id";
         $result = mysqli_query($conn,$sql);
         if($result){
             echo "Done";
         }
     }
     
 }
 else if ($_GET['FunctionName']=="DeleteCampaignPro")
 {
     $id = $_GET['id'];
     $sql = "DELETE FROM `packages` WHERE `id`=$id";
     $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "Done";
    }
 }
  else if ($_GET['FunctionName']=="DeleteQuestion")
 {
     $id = $_GET['id'];
     $sql = "DELETE FROM `questions` WHERE `id`=$id";
     $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "Done";
    }
 }
 else if ($_GET['FunctionName']=="DeleteConsumner"){
      $id = $_GET['id'];
     $sql = "DELETE FROM `users` WHERE `id`=$id";
     $result = mysqli_query($conn,$sql);
         if($result){
             echo "Done";
         }
 }
 
 else if ($_GET['FunctionName']=="DeleteCategories"){
      $id = $_GET['id'];
     $sql = "DELETE FROM `questions_categories` WHERE `id`=$id;";
     $sql .= "DELETE FROM `questions` WHERE category_id = $id";
     $result = mysqli_multi_query($conn,$sql);
         if($result){
             echo "Done";
         }
 }
 
  else if ($_GET['FunctionName']=="DeleteTip"){
      $id = $_GET['id'];
     $sql = "DELETE FROM `tip_of_day` WHERE `id`= $id";
     $result = mysqli_query($conn,$sql);
         if($result){
             echo "Done";
         }
 }
 
 else if ($_GET['FunctionName']=="DeleteRestuarant"){
     $id = $_GET['id'];
     $sql = "DELETE FROM `restuarant` WHERE `id`=$id";
     $result = mysqli_query($conn,$sql);
         if($result){
             echo "Done";
         }
 }
  else if ($_GET['FunctionName']=="DeleteUser"){
     $id = $_GET['id'];
     $sql = "DELETE FROM `users` WHERE `id`=$id";
     $result = mysqli_query($conn,$sql);
         if($result){
             echo "Done";
         }
 }
   else if ($_GET['FunctionName']=="DeleteOwner"){
     $id = $_GET['id'];
     $sql = "DELETE FROM `users` WHERE `id`=$id";
     $result = mysqli_query($conn,$sql);
         if($result){
             echo "Done";
         }
 }
    else if ($_GET['FunctionName']=="DeleteConsumer"){
     $id = $_GET['id'];
     $sql = "DELETE FROM `users` WHERE `id`=$id";
     $result = mysqli_query($conn,$sql);
         if($result){
             echo "Done";
         }
 }
 else if($_GET['FunctionName']=="ToggleSlider"){
     $id = $_GET['id'];
     $status = $_GET['status'];
     if($status==1){
         $sql = "UPDATE `slider` SET `status`=0 WHERE `id`=$id";
         $result = mysqli_query($con,$sql);
         if($result){
             echo "Done";
         }
     }else{
         $sql = "UPDATE `slider` SET `status`=1 WHERE `id`=$id";
         $result = mysqli_query($con,$sql);
         if($result){
             echo "Done";
         }
     }
     
 }else if ($_GET['FunctionName']=="DeleteEBook"){
     $id = $_GET['id'];
     $sql = "DELETE FROM `ebooking` WHERE `id`=$id";
     $result = mysqli_query($con,$sql);
         if($result){
             echo "Done";
         }
 }  
 else if ($_GET['FunctionName']=="DeleteSlider"){
     $id = $_GET['id'];
     $sql = "DELETE FROM `sliders` WHERE `id`=$id";
     $result = mysqli_query($conn,$sql);
         if($result){
             echo "Done";
         }
 }  
 else if ($_GET['FunctionName']=="DeleteRunningSites"){
     $id = $_GET['id'];
     $sql = "DELETE FROM `running` WHERE `site_id`=$id";
     $result = mysqli_query($con,$sql);
         if($result){
             echo "Done";
         }
 }  
}else if(isset($_POST['BtnUopdateOrderStatus'])){
      include('connection.php');
      $userID =  $_POST['userID'];
      echo $Status =  $_POST['Status'];
      $sql =  "UPDATE `tbl_users` SET `user_status` = $Status WHERE `user_id` = $userID";
      $result = mysqli_query($con,$sql);
      header('Location: ../viewuser.php?Message=Sucessfully updated status');
} 

else if(isset($_POST['btnUpdatesubusers'])){
      include('connection.php');
      $id =  $_POST['id'];
      $email =  $_POST['email'];
      $password =  $_POST['password'];
      $status =  $_POST['status'];
      if($status == 'suspended')
      {
          $_SESSION["cstatus"] = $status;
          $sql =  "UPDATE `users` SET `email`= '$email',`password`= '$password', `status`= '$status' WHERE `id`= $id;";
          $sql .=  "UPDATE `privelages_bt` SET `status`= '$status' WHERE `user_id`= $id";
          $result = mysqli_multi_query($conn,$sql);
          header('Location: ../manage_subadmin.php?Message=Sucessfully updated status');
      }
      else
      {
          $sql =  "UPDATE `users` SET `email`= '$email',`password`= '$password', `status`= '$status' WHERE `id`= $id;";
          $sql .=  "UPDATE `privelages_bt` SET `status`= '$status' WHERE `user_id`= $id";
          $result = mysqli_multi_query($conn,$sql);
          header('Location: ../manage_subadmin.php?Message=Sucessfully updated status');
      }
      
} 
     
else if(isset($_POST['BtnUpdateVendorPayment'])){
      include('connection.php');
      $details_id =  $_POST['details_id'];
      $order_id =  $_POST['order_id'];
      $Status =  $_POST['Status'];
      $total_cost =  $_POST['total_cost'];
      if($Status == "Paid"){
         $getcash = "SELECT `total_avaialble_cash` FROM `tbl_admin` WHERE `admin_id` = 1";
         $result_getcash = mysqli_query($con,$getcash);
         if(mysqli_num_rows($result_getcash)> 0 ){
             $Data = mysqli_fetch_array($result_getcash);
             $total_available = $Data['total_avaialble_cash'];
             if($total_available >=  $total_cost){
                $newamount  =   $total_available - $total_cost;
                $deduct_cash = "UPDATE `tbl_admin` SET `total_avaialble_cash` = $newamount  WHERE `admin_id`=1";
                $result_deduct = mysqli_query($con,$deduct_cash);
                if($result_deduct){
                    $sql = "UPDATE `tbl_order_details` SET `paid_to_vendor` = 'Paid' WHERE `details_id` = $details_id";
                    $result = mysqli_query($con,$sql);
                    if($result){
                      date_default_timezone_set("Asia/Karachi");
                      $date = date("Y-m-d H:i:s");
                      $reason = "Debit for vendor payment for product cost of an order";
                      $record_trans = "INSERT INTO `tbl_transaction`(`trans_reason`, `trans_type`, `trans_amount`, `created_date` , `order_id`) VALUES ('$reason','debit',$total_cost,'$date' , '$order_id')";
                      $result_trans = mysqli_query($con,$record_trans);
                      header('Location: ../order_details.php?OrderID='.$order_id.'&Massage=Succesfully Paid');
                    }
                    
                }
             }else{
                header('Location: ../order_details.php?OrderID='.$order_id.'&Massage=No money in cash!');
             }
         
      }
   }else if ($Status == "Balanced"){
       $getcash = "SELECT `balance` FROM `tbl_admin` WHERE `admin_id` = 1";
         $result_getcash = mysqli_query($con,$getcash);
         if(mysqli_num_rows($result_getcash)> 0 ){
             $Data = mysqli_fetch_array($result_getcash);
             $total_available = $Data['balance'];
                $newamount  =   $total_available - $total_cost;
                $deduct_cash = "UPDATE `tbl_admin` SET `balance` = $newamount  WHERE `admin_id`=1";
                $result_deduct = mysqli_query($con,$deduct_cash);
                if($result_deduct){
                    $sql = "UPDATE `tbl_order_details` SET `paid_to_vendor` = 'Balanced' WHERE `details_id` = $details_id";
                    $result = mysqli_query($con,$sql);
                    if($result){
                      // date_default_timezone_set("Asia/Karachi");
                      // $date = date("Y-m-d H:i:s");
                      // $reason = "Paid for Vendor Payment for product cost of Order#".$order_id;
                      // $record_trans = "INSERT INTO `tbl_transaction`(`trans_reason`, `trans_type`, `trans_amount`, `created_date`) VALUES ('$reason','debit',$total_cost,'$date')";
                      // $result_trans = mysqli_query($con,$record_trans);
                      header('Location: ../order_details.php?OrderID='.$order_id.'&Massage=Succesfully Paid');
                    }
                    
            }
      }
   }
     
}else if(isset($_POST['BtnSendpush'])){
    $v = $_POST['checkbox'];
    foreach($v as $i){
        echo $i;
    }
}

else if(isset($_POST['btnSponcer'])){
      include('connection.php');
       $regId =  $_POST['regId'];
       $Sadqa =  $_POST['sadqa'];   
       $Zakat =  $_POST['zakat'];
       $userid = $_SESSION['userID'];
       $total = $Sadqa + $Zakat;
      $sql_check = "SELECT `Amount_remaing` , `Zakat` ,`Sadqa` FROM `tbl_students` WHERE `reg_number` = $regId";
      $execute = mysqli_query($con,$sql_check);
      $Data = mysqli_fetch_array($execute);
      $remain_amount = $Data['Amount_remaing'];
      $new_Zakat = $Data['Zakat'] + $Zakat;
      $new_Sadqa = $Data['Sadqa'] + $Sadqa;
      if($total <= $remain_amount){

         $sql_add = "INSERT INTO `tbl_sponcered`(`user_id`, `reg_no`, `sadqa`, `zakat`) VALUES ($userid,$regId,$Sadqa,$Zakat)";
        $ex_add = mysqli_query($con,$sql_add);
        if($ex_add){
          $new_amount_req = $remain_amount - $total;
          echo $sql_update = "UPDATE `tbl_students` SET `Amount_remaing` = $new_amount_req , `Zakat` = $new_Zakat , `Sadqa` = $new_Sadqa WHERE `reg_number` = $regId";
          $ex_update = mysqli_query($con,$sql_update);
          if($ex_update){
              $get_amounts = "SELECT `user_id`, `user_email`, `user_name`, `user_password`, `created_at`, `user_type`, `profilepic`, `Zakat`, `Sadqa` FROM `tbl_users` WHERE `user_id` = $userid";
              $ex_get = mysqli_query($con,$get_amounts);
              $Amount = mysqli_fetch_array($ex_get);
              $minus_zakat = $Amount['Zakat'] - $Zakat;
              $minus_sadqa = $Amount['Sadqa'] - $Sadqa;
              $update_get = "UPDATE `tbl_users` SET `Zakat` = $minus_zakat , `Sadqa` = $minus_sadqa WHERE `user_id` = $userid";
              $ex_update_get = mysqli_query($con,$update_get);
              if($ex_update_get){
                 header("Location: ../viewuser.php?Massage=Sucessfull added new batch.");
              }
          }

        }
      }else{
        header("Location: ../viewuser.php?Massage=Sucessfull added new .");
      }
     
      
}
else if(isset($_POST['btnUpdateConsumer'])){
      include('connection.php');
    //   echo 1;
      $id =  $_POST['id'];
      $name =  $_POST['name'];
      $email =  $_POST['email'];
      $status =  $_POST['status'];
     

      $sql = "UPDATE `users` SET `name` = '$name', `email` = '$email',`status`= '$status' WHERE `id`='$id'";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../manageconsumer.php?Message=Sucessfully updated details.');
      }
     
      
}


else if(isset($_POST['btnSubmit_editsubadmin'])){
      include('connection.php');
      $id =  $_POST['id'];
      $status =  $_POST['status'];

      $sql = "UPDATE `privelages_bt` SET `status`= '$status' WHERE `id` = $id";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../control_subadmin.php?Message=Sucessfully updated details.');
      }
     
      
}



else if(isset($_POST['btnUpdate_title_name'])){
      include('connection.php');
    //   echo 1;
      $title_id =  $_POST['title_id'];
      $title_name =  $_POST['title_name'];

      $sql = "UPDATE `tip_title` SET `title`= '$title_name' WHERE `id`= $title_id";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../manage_tips.php?Message=Sucessfully updated details.');
      }
     
      
}


else if(isset($_POST['btnUpdateOwner']))
{
      include('connection.php');

      $id =  $_POST['id'];
      $question =  mysqli_real_escape_string($conn,$_POST['question']);
      $category_name =  $_POST['category_name'];
      
    //   echo $id;
    //   echo $question;
    //   echo $category_name;
    //   die();

      $sql = "UPDATE `questions` SET `question`= '$question',`category_id`= '$category_name' WHERE `id`= $id";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../manage_questions.php?Message=Sucessfully updated details.');
      }
     
      
}

else if(isset($_POST['btnUpdateallUsers'])){
      include('connection.php');
      $id =  $_POST['id'];
      $name =  $_POST['name'];
      $email =  $_POST['email'];
      $status =  $_POST['status'];
     

      $sql = "UPDATE `users` SET `name`= '$name' ,`email`= '$email',`status`= '$status' WHERE id = $id";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../manageusers.php?Message=Sucessfully updated details.');
      }
     
      
}
else if(isset($_POST['btnUpdateCat'])){
      include('connection.php');
    //   echo 1;
      $id =  $_POST['id'];
      $name =  $_POST['name'];
     

      $sql = "UPDATE `questions_categories` SET `category_name` = '$name' WHERE `id`='$id'";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../managecat.php?Message=Sucessfully updated details.');
      }
     
      
}

else if(isset($_POST['btnUpdateTip'])){
      include('connection.php');
    //   echo 1;
      $id =  $_POST['id'];
      $name =  $_POST['name'];
     

      $sql = "UPDATE `tip_of_day` SET `tip`= '$name' WHERE `id`= $id";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        // header('location:../manage_tips.php?Message=Sucessfully updated details.');
        ?>
        <script>alert("Sucessfully updated details.");window.location.href = "../manage_tips.php";</script>
        <?php
      }
     
      
}

else if(isset($_POST['btnUpdatepackage'])){
      include('connection.php');
      $id =  $_POST['id'];
      $news_title =  $_POST['package_name'];
      $category_name =  $_POST['package_price'];
     

      $sql = "UPDATE `packages` SET `package_name` = '$news_title', `package_price` = '$category_name' WHERE `id`=$id";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../packages.php?Message=Sucessfully updated details.');
      }
     
      
}
else if(isset($_POST['btnUpdateShedule'])){
      include('connection.php');
      $id =  $_POST['id'];
      $news_title =  $_POST['shedule_name'];
      $category_name =  $_POST['shedule_description'];
     

      $sql = "UPDATE `shedule` SET `shedule_name` = '$news_title', `shedule_description` = '$category_name' WHERE `id`=$id";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../shedule.php?Message=Sucessfully updated details.');
      }
     
      
}
else if(isset($_POST['btnUpdateExercise'])){
      include('connection.php');
      $id =  $_POST['id'];
      $news_title =  $_POST['exercise_name'];
      $category_name =  $_POST['description'];
     

      $sql = "UPDATE `packages` SET `shedule_name` = '$news_title', `shedule_description` = '$category_name' WHERE `id`=$id";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../shedule.php?Message=Sucessfully updated details.');
      }
     
      
}else if(isset($_POST['btnSubmit_aboutus'])){
      include('connection.php');
      $id =  $_POST['id'];
      $about_us =  $_POST['about_us'];
     

      $sql = "UPDATE `app_info` SET `about_us` = '$about_us' WHERE `id`= $id";
      
      $result = mysqli_query($conn,$sql);
      if($result){
        header('Location: ../addaboutus.php?Message=Sucessfully updated details.');
      }
     
      
}
























else if(isset($_POST['btnUpdatesubCat'])){
      include('connection.php');
      $cat_id =  $_POST['cat_id'];
      $cat_name =  $_POST['cat_name'];
     

      $sql = "UPDATE `tbl_sub_categories` SET `sub_category_name` =  '$cat_name' WHERE `sub_category_id` = $cat_id";
      
      $result = mysqli_query($con,$sql);
      if($result){
        header('Location: ../SubCategories.php?Message=Sucessfully updated details.');
      }
     
      
}



else if(isset($_POST['btnToUpdateMcqs'])){
      include('connection.php');
      $questiontype =  $_POST['questiontype'];
      $optiontype =  $_POST['optiontype'];
      $mcqsId = $_POST['mcqsId'];

      if($questiontype == 'image'){
          $getdetails = "SELECT `mcqs_id`, `sub_category_id`, `mcqs_question_type`, `mcqs_question`, `mcqs_options_type`, `mcqs_option_1`, `mcqs_option_2`, `mcqs_option_3`, `mcqs_option_4`, `mcqs_answer`, `mcqs_creator`, `mcqs_created_date` FROM `tbl_mcqs` WHERE `mcqs_id` =  $mcqsId";
          $result = mysqli_query($con,$getdetails);
          if(mysqli_num_rows($result)>0){
            $Data = mysqli_fetch_array($result);          
                if(isset($_FILES['mcqsQuesImage']['name'])){
                   if($Data['mcqs_question_type'] == 'image'){
                       $questionurl = $Data['mcqs_question'];
                       unlink("../Uploads/".$questionurl);
                    }
                    $errors= array();
                    $file_name = $_FILES['mcqsQuesImage']['name'];
                    $file_size =$_FILES['mcqsQuesImage']['size'];
                    $file_tmp =$_FILES['mcqsQuesImage']['tmp_name'];
                    $file_type=$_FILES['mcqsQuesImage']['type'];
                    $tmp_question = explode('.', $file_name);
                    $file_ext = end($tmp_question);                   
                    
                    $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
                    
                    if(in_array($file_ext,$extensions)=== false){
                       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                    }
                    
                    if($file_size > 2097152){
                       $errors[]='File size must be excately 2 MB';
                       echo 'Size of Question image is big!';
                    }
                    $imageNewName = date("Ymdhis").rand(10,100)."Question";
                   
                    if(empty($errors)==true){       
                        move_uploaded_file($file_tmp,"../Uploads/".$imageNewName.".".$file_ext);
                        $imageURL_question = $imageNewName.".".$file_ext;
                        $sql = "UPDATE `tbl_mcqs` SET `mcqs_question` = '$imageURL_question' WHERE `mcqs_id` = $mcqsId";
                        $result = mysqli_query($con,$sql);            
                     }
                 }

             if($optiontype == 'image'){
                if(isset($_FILES['mcqsoption_image_1']['name'])){
                   if($Data['mcqs_options_type'] == 'image'){
                       $url = $Data['mcqs_option_1'];
                       unlink("../Uploads/".$url);
                    }
                    $errors= array();
                    $file_name = $_FILES['mcqsoption_image_1']['name'];
                    $file_size =$_FILES['mcqsoption_image_1']['size'];
                    $file_tmp =$_FILES['mcqsoption_image_1']['tmp_name'];
                    $file_type=$_FILES['mcqsoption_image_1']['type'];
                    $tmp_question = explode('.', $file_name);
                    $file_ext = end($tmp_question);                   
                    
                    $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
                    
                    if(in_array($file_ext,$extensions)=== false){
                       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                    }
                    
                    if($file_size > 2097152){
                       $errors[]='File size must be excately 2 MB';
                       echo 'Size of Question image is big!';
                    }
                    $imageNewName = date("Ymdhis").rand(10,100)."Options";
                   
                    if(empty($errors)==true){       
                        move_uploaded_file($file_tmp,"../Uploads/".$imageNewName.".".$file_ext);
                        $imageURL_question = $imageNewName.".".$file_ext;
                        $sql = "UPDATE `tbl_mcqs` SET `mcqs_option_1` = '$imageURL_question' WHERE `mcqs_id` = $mcqsId";
                        $result = mysqli_query($con,$sql);            
                     }
                 }
                 else  if(isset($_FILES['mcqsoption_image_2']['name'])){
                   if($Data['mcqs_options_type'] == 'image'){
                       $url = $Data['mcqs_option_2'];
                       unlink("../Uploads/".$url);
                    }
                    $errors= array();
                    $file_name = $_FILES['mcqsoption_image_2']['name'];
                    $file_size =$_FILES['mcqsoption_image_2']['size'];
                    $file_tmp =$_FILES['mcqsoption_image_2']['tmp_name'];
                    $file_type=$_FILES['mcqsoption_image_2']['type'];
                    $tmp_question = explode('.', $file_name);
                    $file_ext = end($tmp_question);                   
                    
                    $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
                    
                    if(in_array($file_ext,$extensions)=== false){
                       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                    }
                    
                    if($file_size > 2097152){
                       $errors[]='File size must be excately 2 MB';
                       echo 'Size of Question image is big!';
                    }
                    $imageNewName = date("Ymdhis").rand(10,100)."Options";
                   
                    if(empty($errors)==true){       
                        move_uploaded_file($file_tmp,"../Uploads/".$imageNewName.".".$file_ext);
                        $imageURL_question = $imageNewName.".".$file_ext;
                        $sql = "UPDATE `tbl_mcqs` SET `mcqs_option_2` = '$imageURL_question' WHERE `mcqs_id` = $mcqsId";
                        $result = mysqli_query($con,$sql);            
                     }
                 }else  if(isset($_FILES['mcqsoption_image_3']['name'])){
                   if($Data['mcqs_options_type'] == 'image'){
                       $url = $Data['mcqs_option_3'];
                       unlink("../Uploads/".$url);
                    }
                    $errors= array();
                    $file_name = $_FILES['mcqsoption_image_3']['name'];
                    $file_size =$_FILES['mcqsoption_image_3']['size'];
                    $file_tmp =$_FILES['mcqsoption_image_3']['tmp_name'];
                    $file_type=$_FILES['mcqsoption_image_3']['type'];
                    $tmp_question = explode('.', $file_name);
                    $file_ext = end($tmp_question);                   
                    
                    $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
                    
                    if(in_array($file_ext,$extensions)=== false){
                       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                    }
                    
                    if($file_size > 2097152){
                       $errors[]='File size must be excately 2 MB';
                       echo 'Size of Question image is big!';
                    }
                    $imageNewName = date("Ymdhis").rand(10,100)."Options";
                   
                    if(empty($errors)==true){       
                        move_uploaded_file($file_tmp,"../Uploads/".$imageNewName.".".$file_ext);
                        $imageURL_question = $imageNewName.".".$file_ext;
                        $sql = "UPDATE `tbl_mcqs` SET `mcqs_option_3` = '$imageURL_question' WHERE `mcqs_id` = $mcqsId";
                        $result = mysqli_query($con,$sql);            
                     }
                 }else  if(isset($_FILES['mcqsoption_image_4']['name'])){
                   if($Data['mcqs_options_type'] == 'image'){
                       $url = $Data['mcqs_option_4'];
                       unlink("../Uploads/".$url);
                    }
                    $errors= array();
                    $file_name = $_FILES['mcqsoption_image_4']['name'];
                    $file_size =$_FILES['mcqsoption_image_4']['size'];
                    $file_tmp =$_FILES['mcqsoption_image_4']['tmp_name'];
                    $file_type=$_FILES['mcqsoption_image_4']['type'];
                    $tmp_question = explode('.', $file_name);
                    $file_ext = end($tmp_question);                   
                    
                    $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
                    
                    if(in_array($file_ext,$extensions)=== false){
                       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                    }
                    
                    if($file_size > 2097152){
                       $errors[]='File size must be excately 2 MB';
                       echo 'Size of Question image is big!';
                    }
                    $imageNewName = date("Ymdhis").rand(10,100)."Options";
                   
                    if(empty($errors)==true){       
                        move_uploaded_file($file_tmp,"../Uploads/".$imageNewName.".".$file_ext);
                        $imageURL_question = $imageNewName.".".$file_ext;
                        $sql = "UPDATE `tbl_mcqs` SET `mcqs_option_4` = '$imageURL_question' WHERE `mcqs_id` = $mcqsId";
                        $result = mysqli_query($con,$sql);            
                     }
                 }
             }else{

             }    
        } 


      }else{

      }
     

     
      
}


else if(isset($_POST['BtnUopdateSliderImage'])){
      include('connection.php');
      $campID =  $_POST['campID'];
      $sqlgetid = "SELECT * FROM `slider` WHERE `id`=$campID";
      $resultggetid =mysqli_query($con,$sqlgetid);
      $imageNewName = mysqli_fetch_array($resultggetid);
      $imageNewName = (explode('.', $imageNewName['photo']));
      $imageNewName =  $imageNewName[0];
      $errors= array();
      $file_name = $_FILES['UploadImage']['name'];
      $file_size =$_FILES['UploadImage']['size'];
      $file_tmp =$_FILES['UploadImage']['tmp_name'];
      $file_type=$_FILES['UploadImage']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['UploadImage']['name'])));
      
      $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
          $img = $imageNewName.".".$file_ext;
         move_uploaded_file($file_tmp,"../SliderImages/".$imageNewName.".$file_ext");
          $imageURL = $imageNewName.".".$file_ext;
          $sql = "UPDATE `slider` SET `photo`='$img' WHERE `id`=$campID";
          $result = mysqli_query($con,$sql);
          if($result){
              echo "<script>alert('Image Uploaded Sucessfully.')</script>";
              header('Location: ../UpdateSliderImages.php?Massage=Succesfully uploaded');
          }
      }else{
         print_r($errors);
      }
}
else if(isset($_POST['btnUpdateEbook'])){
      include('connection.php');
      $EbookID=  $_POST['EbookID'];
      $YouName=  $_POST['YouName'];
      $NameOfVisiting=  $_POST['NameOfVisiting'];
      $DOB=  $_POST['DOB'];
      $UEmail=  $_POST['UEmail'];
      $UMobile=  $_POST['UMobile'];
      $UType=  $_POST['UType'];
      $USubType =  $_POST['USubType'];
      $UserId =  $_POST['UserId'];
      $sqlgetid = "SELECT * FROM `ebooking` WHERE `id`=$EbookID";
      $resultggetid =mysqli_query($con,$sqlgetid);
      $imageNewName = mysqli_fetch_array($resultggetid);
      $imageNewName = (explode('.', $imageNewName['photo']));
      $imageNewName =  $imageNewName[0];
      if(isset($_FILES['UploadImage']['name'])){
      $errors= array();
      $file_name = $_FILES['UploadImage']['name'];
      $file_size =$_FILES['UploadImage']['size'];
      $file_tmp =$_FILES['UploadImage']['tmp_name'];
      $file_type=$_FILES['UploadImage']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['UploadImage']['name'])));
      
      $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
          $img = $imageNewName.".".$file_ext;
          move_uploaded_file($file_tmp,"../Ebookphoto/".$imageNewName.".$file_ext");
          $imageURL = $imageNewName.".".$file_ext;
          $sql = "UPDATE `ebooking` SET `photo`='$img' WHERE `id`=$campID";
          $result = mysqli_query($con,$sql);
      }else{
         print_r($errors);
      }
    }
    $sql2 = "UPDATE `ebooking` SET `user_id`=$UserId,`name`='$YouName',`mobile`='$UMobile',`visitwith`='$NameOfVisiting',`email`='$UEmail',`dob`='$DOB',`type`='$UType',`subtype`='$USubType' WHERE `id`=$EbookID";
    $result2 = mysqli_query($con,$sql2);
     if($result2){
              echo "<script>alert('Image Uploaded Sucessfully.')</script>";
              header('Location: ../UpdateSliderImages.php?Massage=Succesfully uploaded');
          }
}
else if(isset($_POST['btnUpdateRunningSite'])){
      include('connection.php');
      $RunningSiteID=  $_POST['RunningSiteID'];
      $SiteName=  $_POST['SiteName'];
      $UProperty=  $_POST['UProperty'];
      $UArea=  $_POST['UArea'];
      $UUnit=  $_POST['UUnit'];
      $UAmenities=  $_POST['UAmenities'];
      $UAdvantage=  $_POST['UAdvantage'];
      
      
      if(isset($_FILES['UploadFileSiteLogo']['name'])){
          $sqlgetid = "SELECT * FROM `running` WHERE `site_id`=$RunningSiteID";
          $resultggetid =mysqli_query($con,$sqlgetid);
          $imageNewName = mysqli_fetch_array($resultggetid);
          $imageNewName = (explode('.', $imageNewName['site_logo']));
          $imageNewName =  $imageNewName[0];
          $errors= array();
          $file_name = $_FILES['UploadFileSiteLogo']['name'];
          $file_size =$_FILES['UploadFileSiteLogo']['size'];
          $file_tmp =$_FILES['UploadFileSiteLogo']['tmp_name'];
          $file_type=$_FILES['UploadFileSiteLogo
          ']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['UploadFileSiteLogo']['name'])));
          
          $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
          
          if(in_array($file_ext,$extensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          
          if($file_size > 2097152){
             $errors[]='File size must be excately 2 MB';
          }
          
          if(empty($errors)==true){
              $img = $imageNewName.".".$file_ext;
              move_uploaded_file($file_tmp,"../RunningSitesImages/".$imageNewName.".$file_ext");
              $imageURL = $imageNewName.".".$file_ext;
              $sql = "UPDATE `running` SET `site_logo`='$img' WHERE `id`=$RunningSiteID";
              $result = mysqli_query($con,$sql);
          }else{
             print_r($errors);
          }
    }
     if(isset($_FILES['UploadFileCLogo']['name'])){
          $sqlgetid = "SELECT * FROM `running` WHERE `site_id`=$RunningSiteID";
          $resultggetid =mysqli_query($con,$sqlgetid);
          $imageNewName = mysqli_fetch_array($resultggetid);
          $imageNewName = (explode('.', $imageNewName['clogo']));
          $imageNewName =  $imageNewName[0];
          $errors= array();
          $file_name = $_FILES['UploadFileCLogo']['name'];
          $file_size =$_FILES['UploadFileCLogo']['size'];
          $file_tmp =$_FILES['UploadFileCLogo']['tmp_name'];
          $file_type=$_FILES['UploadFileCLogo
          ']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['UploadFileCLogo']['name'])));
          
          $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
          
          if(in_array($file_ext,$extensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          
          if($file_size > 2097152){
             $errors[]='File size must be excately 2 MB';
          }
          
          if(empty($errors)==true){
              $img = $imageNewName.".".$file_ext;
              move_uploaded_file($file_tmp,"../RunningSitesImages/".$imageNewName.".$file_ext");
              $imageURL = $imageNewName.".".$file_ext;
              $sql = "UPDATE `running` SET `clogo`='$img' WHERE `id`=$RunningSiteID";
              $result = mysqli_query($con,$sql);
          }else{
             print_r($errors);
          }
    }
    
    if(isset($_FILES['UploadSiteImage']['name'])){
          $sqlgetid = "SELECT * FROM `running` WHERE `site_id`=$RunningSiteID";
          $resultggetid =mysqli_query($con,$sqlgetid);
          $imageNewName = mysqli_fetch_array($resultggetid);
          $imageNewName = (explode('.', $imageNewName['site_img']));
          $imageNewName =  $imageNewName[0];
          $errors= array();
          $file_name = $_FILES['UploadSiteImage']['name'];
          $file_size =$_FILES['UploadSiteImage']['size'];
          $file_tmp =$_FILES['UploadSiteImage']['tmp_name'];
          $file_type=$_FILES['UploadSiteImage
          ']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['UploadFileCLogo']['name'])));
          
          $extensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
          
          if(in_array($file_ext,$extensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          
          if($file_size > 2097152){
             $errors[]='File size must be excately 2 MB';
          }
          
          if(empty($errors)==true){
              $img = $imageNewName.".".$file_ext;
              move_uploaded_file($file_tmp,"../RunningSitesImages/".$imageNewName.".$file_ext");
              $imageURL = $imageNewName.".".$file_ext;
              $sql = "UPDATE `running` SET `site_img`='$img' WHERE `id`=$RunningSiteID";
              $result = mysqli_query($con,$sql);
          }else{
             print_r($errors);
          }
    }
    
     if(isset($_FILES['UploadSitePDF']['name'])){
          $sqlgetid = "SELECT * FROM `running` WHERE `site_id`=$RunningSiteID";
          $resultggetid =mysqli_query($con,$sqlgetid);
          $imageNewName = mysqli_fetch_array($resultggetid);
          $imageNewName = (explode('.', $imageNewName['pdf']));
          $imageNewName =  $imageNewName[0];
          $errors= array();
          $file_name = $_FILES['UploadSitePDF']['name'];
          $file_size =$_FILES['UploadSitePDF']['size'];
          $file_tmp =$_FILES['UploadSitePDF']['tmp_name'];
          $file_type=$_FILES['UploadSitePDF
          ']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['UploadFileCLogo']['name'])));
          
           $extensionsPDF= array("pdf","PDF");
          
          if(in_array($file_ext,$extensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          
          if($file_size > 2097152){
             $errors[]='File size must be excately 2 MB';
          }
          
          if(empty($errors)==true){
              $img = $imageNewName.".".$file_ext;
              move_uploaded_file($file_tmp,"../RunningSitesImages/".$imageNewName.".$file_ext");
              $imageURL = $imageNewName.".".$file_ext;
              $sql = "UPDATE `running` SET `pdf`='$img' WHERE `id`=$RunningSiteID";
              $result = mysqli_query($con,$sql);
          }else{
             print_r($errors);
          }
    }
    $sql2 = "UPDATE `running` SET `site_name`='$SiteName',`property`='$UProperty',`area`='$UArea',`unit`='$UUnit',`amenities`='$UAmenities',`advantage`='$UAdvantage' WHERE `site_id`=$RunningSiteID";
    $result2 = mysqli_query($con,$sql2);
     if($result2){
              echo "<script>alert('Image Uploaded Sucessfully.')</script>";
              header('Location: ../UpdateRunningSite.php?Massage=Succesfully uploaded');
          }
}


?>