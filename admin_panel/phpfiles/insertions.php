<?php
// for the insertion of News
if(isset($_POST['btnSubmit_insertCategory'])){
include('../assets/connection.php');

  $CatName = $_POST['CatName'];  
//   $CatDes = $_POST['CatDes'];


        $sql = "INSERT INTO `questions_categories`(`category_name`) VALUES ('$CatName')";
        $result = mysqli_query($conn,$sql);
        if($result){
          header("Location:../addquestion_category.php?Massage=Sucessfully added new news.");
        }
     
      

}

if(isset($_POST['btnSubmit_insertNotification']))
{
       include('../assets/connection.php');
    
    // $NotUser = $_POST['NotUser'];
       $NotiName = mysqli_real_escape_string($conn,$_POST['NotiTitle']);  
       $NotiDes = mysqli_real_escape_string($conn,$_POST['notiContent']);
       
       $fetch_user = "SELECT `id`, `role_id`, `name` FROM `users` WHERE role_id = 2";
       $run_user = mysqli_query($conn,$fetch_user);
       $user_rows = mysqli_num_rows($run_user);
       if($user_rows > 0)
       {
           while($userArr = mysqli_fetch_array($run_user))
           {
               $user_id  = $userArr["id"];
               
               $insert_noti = "INSERT INTO `notifications`(`user_id`, `title`, `description`) VALUES ('$user_id','$NotiName','$NotiDes')";
               $run_noti = mysqli_query($conn,$insert_noti);
               if($run_noti)
               {
                    $sqlMembersx = "SELECT `notification_token` FROM `users` WHERE `id` = '$user_id' ";
                    $runMembersx = mysqli_query($conn,$sqlMembersx);
                    $playerIdx = [];
                    $subject = '';
                    $newstatus = '';
                    
                    while($row = mysqli_fetch_array($runMembersx))
                    {
                        array_push($playerIdx, $row['notification_token']);
                    }
                   
                    $content = 'Dear User check your notification '  . $NotiName.'.';
                    $contentx = array
                    (
                        "en" => $content
                    );
                   
                    $insert_noti_log = "INSERT INTO `notification_log`(`user_id`, `title`, `description`)
                    VALUES ('$user_id','$NotiName','$NotiDes')";
                    $execute_insert_noti = mysqli_query($conn,$insert_noti_log);
                    
                    $fields = array
                    (
                        'app_id' => "8756ec81-9a62-466c-83ff-3bdd09f82917", /*token */
                        'include_player_ids' => $playerIdx,
                        'data' => array("foo" => "NewMassage","Id"),
                        'large_icon' =>"ic_launcher_round.png",
                        'contents' => $contentx
                    );
            
                    $fields = json_encode($fields);
                    
                    
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                    'Authorization: Basic ODU5ZDhiZjAtOWRkZS00NDIyLWI0ZWItOTYxMDc5YzQzMGIz'));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($ch, CURLOPT_HEADER, FALSE);
                    curl_setopt($ch, CURLOPT_POST, TRUE);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
            
                    $response = curl_exec($ch);
                    curl_close($ch);
                   
               }
               else
               {
                    ?>
                       <script>
                           alert("somnething went wrong");
                       </script>
                   <?php
               }
               
           }
           
           ?>
             <script>
                alert("Notifcation sent successfully");
                window.location.href="../manage_notification.php";
             </script>
          <?php
           
       }
       else
       {
           ?>
           <script>
               alert("user's does'nt exist");
           </script>
           <?php
       }
       

}


if(isset($_POST['btnSubmit_insertTip']))
{
        include('../assets/connection.php');

        $tip = mysqli_real_escape_string($conn, $_POST['NotiTitle']);  
        $date = $_POST['date'];
       
        // $sql = "SELECT `id`, `tip`, `created_at` FROM `tip_of_day`";
        // $result = mysqli_query($conn,$sql);
        // if(mysqli_num_rows($result) > 0)
        // {
            
        //     $row = mysqli_fetch_array($result);
        //     $id = $row['id'];
        //     $title = mysqli_real_escape_string($conn, $row['tip']);
   
        //     $sql_insert = "INSERT INTO `tip_log`(`tip`) VALUES ('$title')";
        //     $result_insert = mysqli_query($conn,$sql_insert);
          
                
        //     $insert = "UPDATE `tip_of_day` SET `tip`='$tip' WHERE id = $id";
        //     $result_noti = mysqli_query($conn,$insert);
        //     if($result_noti)
        //     {
        //         header("Location:../addtip.php?Massage=Sucessfully added new Tip for the day."); 
        //     }
               
        // }
        // else
        // {
            $insert = "INSERT INTO `tip_of_day`(`tip`, `created_at`) VALUES ('$tip','$date')";
            $result_noti = mysqli_query($conn,$insert);
            if($result_noti)
            {
                 header("Location:../addtip.php?Massage=Sucessfully added new Tip for the day."); 
            } 
        // }
     
                // header("Location:../addnotification.php?Massage=Sucessfully added new notification.");


}

// for the insertion of Questions
if(isset($_POST['btnSubmit_insertquestion'])){
include('../assets/connection.php');


      $QuesCat = $_POST['QuesCat'];  
      $QuesName = mysqli_real_escape_string($conn,$_POST['QuesName']);
      $answers= mysqli_real_escape_string($conn,$_POST['answers']);

        $sql = "INSERT INTO `questions`(`question`, `answer`, `category_id`) VALUES ('$QuesName','$answers','$QuesCat')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
          header("Location:../add_questions.php?Massage=Sucessfully added new question(s).");
        }
        else
        {
            echo mysqli_error($conn);
        }
     
      

}


// for the insertion of Bulk File

   if(isset($_POST['btnSubmit_bulkFile']))
	{
	   require_once('../PHPExcel/PHPExcel.php');
	   require_once('../PHPExcel/PHPExcel/IOFactory.php');
						        
		$file = $_FILES['csv']['tmp_name'];
						        
		$obj = PHPExcel_IOFactory::load($file);
		foreach($obj->getWorksheetIterator() as $sheet)
		{
			$getHighestRow = $sheet->getHighestRow();
			echo '<pre>';
			print_r($getHighestRow);
		}
						        
	}
	
//end	
	
	
	
	// for the add sub admin
if(isset($_POST['btnSubmit_insertadmin']))
{
  include('../assets/connection.php');
  

  $adminEmail = $_POST['adminEmail'];  
  $adminPassword = $_POST['adminPassword'];
  $p_id = $_POST['p_id'];

  
  $sql1 = "INSERT INTO `users`(`role_id`, `email`, `password`) VALUES ('1','$adminEmail','$adminPassword')";
  $sql1_exec = mysqli_query($conn,$sql1);
  $last_id = $conn->insert_id;
  if($sql1_exec)
  {
      
      foreach($p_id as $val)
      {
          $sql2 = "INSERT INTO `privelages_bt`(`user_id`, `p_id`) VALUES ($last_id,$val)";
          $sql2_exec = mysqli_query($conn,$sql2);
      }
      if($sql2_exec)
      {
         header("Location:../create_admin.php?Massage=Sucessfully added subamin.");
      }
      else
      {
         echo mysqli_error($conn);
      }
      
  }
  else
  {
     echo mysqli_error($conn);
  }
     
      

}

//end


if(isset($_POST['btnSubmit_insertmiles'])){
include('../assets/connection.php');

  $id = $_POST['id']; 
  $miles = $_POST['miles']; 



        // $sql = "INSERT INTO `distance`(`distance`) VALUES ('$miles')";
        $sql = "UPDATE `distance` SET `distance` = '$miles' WHERE `id` = '$id' ";
        $result = mysqli_query($conn,$sql);
        if($result){
          header("Location:../add_miles.php?Massage=Sucessfully added new news.");
        }
     
      

}

// for the insertion of packages
if(isset($_POST['btnSubmit_insertpackage'])){
include('../assets/connection.php');

  $package_name = $_POST['package_name'];  
  $package_price = $_POST['package_price'];


        $sql = "INSERT INTO `packages`(`package_name`, `package_price`) VALUES ('$package_name','$package_price')";
        $result = mysqli_query($conn,$sql);
        if($result){
          header("Location:../packages.php?Massage=Sucessfully added new package.");
        }
}











// for the insertion of classes
if(isset($_POST['btnSubmit_insertClass'])){
include('../assets/connection.php');

  
$course_name = $_POST['course_name'];
$description = $_POST['description'];
$class_timings =$_POST['class_timings'];
$class_days =$_POST['class_days'];
$exercise_name =$_POST['exercise_name'];
$class_timingsx =implode("#imp#",$class_timings);
$class_daysx =implode("#imp#",$class_days);
$exercise_namex =implode("#imp#",$exercise_name);




$target_dir = "uploads/";
$fileName = rand()."_".basename($_FILES["image"]["name"]);
$target_file = $target_dir . $fileName;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {


$sql = "INSERT INTO `classes`(`course_name`, `description`,`class_timings`,`class_days`,`exercise_name`, `image`) VALUES ('$course_name','$description','$class_timingsx','$class_daysx','$exercise_namex','$fileName')";

   $result = mysqli_query($conn,$sql);
        if($result){
          header("Location:../classes.php?Massage=Sucessfully added new classes.");
        }
} else {
    $data = ["status"=>false,
                "message"=>"there was a problem while uploading image"];
      echo json_encode($data);   
  }
    
}























// for the insertion of shedules
if(isset($_POST['btnSubmit_insertshedule'])){
include('../assets/connection.php');

  $shedule_name = $_POST['shedule_name'];  
  $shedule_description = $_POST['shedule_description'];
// $shedule_image = $_POST['shedule_image'];
        $sql = "INSERT INTO `shedule`(`shedule_name`, `shedule_description`) VALUES ('$shedule_name','$shedule_description')";
        $result = mysqli_query($conn,$sql);
        if($result){
          header("Location:../shedule.php?Massage=Sucessfully added new shedule.");
        
        }
}




if(isset($_POST['btnUpdateImage'])){
include('../assets/connection.php');
  
  $CatID = $_POST['CatID'];
  $target_dir = "../Uploads/";
  $target_file = $target_dir . basename($_FILES["updatedImage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  if ($_FILES["updatedImage"]["size"] > 500000) {
  echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
  }
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      
       echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
      $uploadOk = 0;
    }
    
   if ($uploadOk == 0) {
       echo "<script>alert('Sorry, your file was not uploaded.')</script>";
    } else {
      $get_file_name = "SELECT  `img`  FROM `categories` WHERE `id` = $CatID";
      $ex_file_name = mysqli_query($conn,$get_file_name);
      if(mysqli_num_rows($ex_file_name)>0){
          $Data = mysqli_fetch_array($ex_file_name);
           $image_name = $Data['img'];
          if (move_uploaded_file($_FILES["updatedImage"]["tmp_name"], $target_dir.$image_name)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["CatImage"]["name"])). " has been updated.";
          
               header("Location:../addmaincat.php?Massage=Sucessfully updated category.");
            
          } else {
           
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
          }
      }
      
   }
   
}


if(isset($_POST['btnUpdateProdImage'])){
include('../assets/connection.php');
 
  $ProdID = $_POST['ProID'];
  $target_dir = "../Uploads/";
  $target_file = $target_dir . basename($_FILES["updatedImage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  if ($_FILES["updatedImage"]["size"] > 500000) {
  echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
  }
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      
       echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
      $uploadOk = 0;
    }
    
   if ($uploadOk == 0) {
       echo "<script>alert('Sorry, your file was not uploaded.')</script>";
    } else {
      $get_file_name = "SELECT  `img`  FROM `product_images` WHERE `product_id` = $ProdID";
      $ex_file_name = mysqli_query($conn,$get_file_name);
      if(mysqli_num_rows($ex_file_name)>0){
          $Data = mysqli_fetch_array($ex_file_name);
           $image_name = $Data['img'];
          if (move_uploaded_file($_FILES["updatedImage"]["tmp_name"], $target_dir.$image_name)) {
              echo "The file ". htmlspecialchars( basename( $_FILES["updatedImage"]["name"])). " has been updated.";
               header("Location:../addmaincat.php?manageproducts=Sucessfully updated product.");
            
          } else {
           
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
          }
      }
      
   }
   
}



if(isset($_POST['btnUpdateSubCatImage'])){
include('../assets/connection.php');
  session_start();
  $CatID = $_POST['CatID'];
  $target_dir = "../Uploads/";
  $target_file = $target_dir . basename($_FILES["updatedImage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  if ($_FILES["updatedImage"]["size"] > 500000) {
  echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
  }
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      
       echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
      $uploadOk = 0;
    }
    
   if ($uploadOk == 0) {
       echo "<script>alert('Sorry, your file was not uploaded.')</script>";
    } else {
      $get_file_name = "SELECT  `img`  FROM `sub_categories` WHERE `id` = $CatID";
      $ex_file_name = mysqli_query($conn,$get_file_name);
      if(mysqli_num_rows($ex_file_name)>0){
          $Data = mysqli_fetch_array($ex_file_name);
           $image_name = $Data['img'];
          if (move_uploaded_file($_FILES["updatedImage"]["tmp_name"], $target_dir.$image_name)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["CatImage"]["name"])). " has been updated.";
           
               header("Location:../SubCat.php?Massage=Sucessfully updated sub category.");
            
          } else {
           
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
          }
      }
      
   }
   
}



if(isset($_POST['BtnSendpush'])){
    include('../assets/connection.php');
    $v = $_POST['checkbox'];
    $cont = $_POST['content'];
    $playerId = [];
    $subject = '';
    foreach($v as $i){
        $user_id = $i;
        $sql_get_token = "SELECT `name`, `notification_token` FROM `users` WHERE `id`=$user_id";
        $ex = mysqli_query($conn,$sql_get_token);
        $Data = mysqli_fetch_array($ex);
         $Data['notification_token'];
        array_push($playerId, $Data['notification_token']);   
    }
      $content = array(
                    "en" => $cont
                    );

                $fields = array(
                    'app_id' => "daa2ba7b-daef-4363-935e-d5138d73cf98",
                     'include_player_ids' => $playerId,
                    'data' => array("foo" => "NewMassage","Id" => $taskid),
                    'large_icon' =>"ic_launcher_round.png",
                    'contents' => $content
                );

                $fields = json_encode($fields);
               

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                                           'Authorization: Basic ODU5ZDhiZjAtOWRkZS00NDIyLWI0ZWItOTYxMDc5YzQzMGIz'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    

                 $response = curl_exec($ch);
                curl_close($ch);
                header("Location:../SendNotifications.php?Massage=Sucessfully sent notification.");
    
}


if(isset($_POST['btnSubmit_insertSubCategories'])){
include('../assets/connection.php');
  session_start();
  $cat_name = $_POST['CatName'];
  $main_cat = $_POST['MainCat'];
  $target_dir = "../Uploads/";
  $target_file = $target_dir . basename($_FILES["CatImage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  if ($_FILES["CatImage"]["size"] > 500000) {
  echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
  }
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      
       echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
      $uploadOk = 0;
    }
    
   if ($uploadOk == 0) {
       echo "<script>alert('Sorry, your file was not uploaded.')</script>";
    } else {
      $filewithnewname =  date("Ymdis")."_Sub_Cat.".$imageFileType;    
      if (move_uploaded_file($_FILES["CatImage"]["tmp_name"], $target_dir.$filewithnewname)) {
         "The file ". htmlspecialchars( basename( $_FILES["CatImage"]["name"])). " has been uploaded.";
        $sql = "INSERT INTO `sub_categories`(`category_id`, `name`, `img`) VALUES ($main_cat,'$cat_name','$filewithnewname')";
        $result = mysqli_query($conn,$sql);
        if($result){
           header("Location:../addSubCat.php?Massage=Sucessfully added new category.");
        }
      } else {
       
        echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
      }
   }
  
  

}


if(isset($_POST['btnSubmit_insertSliders'])){
include('../assets/connection.php');
  session_start();
  $cat_name = $_POST['CatName'];
  $main_cat = $_POST['MainCat'];
  $target_dir = "../Uploads/";
  $target_file = $target_dir . basename($_FILES["CatImage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  if ($_FILES["CatImage"]["size"] > 500000) {
  echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
  }
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      
       echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
      $uploadOk = 0;
    }
    
   if ($uploadOk == 0) {
       echo "<script>alert('Sorry, your file was not uploaded.')</script>";
    } else {
      $filewithnewname =  date("Ymdis")."_Slider.".$imageFileType;    
      if (move_uploaded_file($_FILES["CatImage"]["tmp_name"], $target_dir.$filewithnewname)) {
         "The file ". htmlspecialchars( basename( $_FILES["CatImage"]["name"])). " has been uploaded.";
         $sql = "INSERT INTO `sliders`(`alt_name`, `type`, `img`) VALUES ('$cat_name','$main_cat','$filewithnewname')";
        $result = mysqli_query($conn,$sql);
        if($result){
           header("Location:../addslider.php?Massage=Sucessfully added new slider.");
        }
      } else {
       
        echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
      }
   }
  
  

}

if(isset($_POST['btnSubmit_insertProduct'])){
include('../assets/connection.php');
  session_start();
  $ProName = $_POST['ProName'];
  $ProDes = $_POST['ProDes'];
  $ProCost = $_POST['ProCost'];
  $ProPrice = $_POST['ProPrice'];
  $ProQty = $_POST['ProQty'];
  $ProDiscount = $_POST['ProDiscount'];
  $MainCat = $_POST['MainCat'];
  $target_dir = "../Uploads/";
  $target_file = $target_dir . basename($_FILES["ProImage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  if ($_FILES["CatImage"]["size"] > 500000) {
  echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
  }
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      
      echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
      $uploadOk = 0;
    }
    
  if ($uploadOk == 0) {
      echo "<script>alert('Sorry, your file was not uploaded.')</script>";
    } else {
      $filewithnewname =  date("Ymdis")."_Product.".$imageFileType;    
      if (move_uploaded_file($_FILES["ProImage"]["tmp_name"], $target_dir.$filewithnewname)) {
         "The file ". htmlspecialchars( basename( $_FILES["ProImage"]["name"])). " has been uploaded.";
         
         $sql = "INSERT INTO `products`(`sub_category_id`, `name`, `description`, `cost`, `price`, `discount`, `qty`) VALUES ($MainCat,'$ProName','$ProDes',$ProCost,$ProPrice,$ProDiscount,$ProQty)";
        $result = mysqli_query($conn,$sql);
        $last_id = mysqli_insert_id($conn);
         $sql_image = "INSERT INTO `product_images`(`product_id`, `img`) VALUES ($last_id,'$filewithnewname')";
        $result_image = mysqli_query($conn,$sql_image);
        
        if($result_image){
          header("Location:../addnewProduct.php?Massage=Sucessfully added new product.");
        }
      } else {
       
        echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
      }
  }


}

if(isset($_POST['btnSubmit_Action'])){
    $status = $_POST['Action'];
    $order_id = $_POST['order_id'];
    $shipping = $_POST['shipping'];
    include('../assets/connection.php');
    $sql;
    if($status == 'shipped'){
        $sql = "UPDATE `orders` SET `status` = '$status'  , `Shipping_Cost` = $shipping WHERE `id` = $order_id"; 
    }else{
        $sql = "UPDATE `orders` SET `status` = '$status'WHERE `id` = $order_id";
    }
   
    $update = mysqli_query($conn,$sql);
     $sqltaskMembers = "SELECT orders.id , users.name, users.notification_token FROM `orders` INNER JOIN users On users.id = orders.user_id WHERE orders.id = $order_id";
        $taskMembers = mysqli_query($conn,$sqltaskMembers);
        $playerId = [];
        $subject = '';
        while($row = mysqli_fetch_array($taskMembers)){
        	     $order_id =  $row['id'];
                 array_push($playerId, $row['notification_token']);           
            }
            
                $content = array(
                    "en" => ' Your order no: '.$order_id.' has been '.$status.'.'
                    );

                $fields = array(
                    'app_id' => "daa2ba7b-daef-4363-935e-d5138d73cf98",
                     'include_player_ids' => $playerId,
                    'data' => array("foo" => "NewMassage","Id" => $taskid),
                    'large_icon' =>"ic_launcher_round.png",
                    'contents' => $content
                );

                $fields = json_encode($fields);
               

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                                           'Authorization: Basic ODU5ZDhiZjAtOWRkZS00NDIyLWI0ZWItOTYxMDc5YzQzMGIz'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    

                 $response = curl_exec($ch);
                curl_close($ch);
    
    
    if($update){
         header("Location:../order_details.php?order_id=".$order_id."&Massage=Sucessfully updated order.");
    }
    
    
}

if(isset($_POST['updateCategory'])){
    $ProName = $_POST['ProName'];
    $product_id = $_POST['product_id'];
    include('../assets/connection.php');
    $sql = "UPDATE `categories` SET `name` = '$ProName' WHERE `id` = $product_id";
    $update = mysqli_query($conn,$sql);
    if($update){
         header("Location:../viewcategories.php?Massage=Sucessfully updated category.");
    }
}

// if(isset($_POST['btnSubmit_insertAreas'])){
//     $CatName = $_POST['CatName'];
//     include('../assets/connection.php');
//     $sql = "INSERT INTO `tbl_areas`(`area_name`) VALUES ('$CatName')";
//     $update = mysqli_query($conn,$sql);
//     if($update){
//          header("Location:../addareas.php?Massage=Sucessfully added new area.");
//     }
// }


if(isset($_POST['updateProduct'])){
    $product_id = $_POST['product_id'];
    $ProName = $_POST['ProName'];
    $ProDes = $_POST['ProDes'];
    $ProCost = $_POST['ProCost'];
    $ProPrice = $_POST['ProPrice'];
    $ProDis = $_POST['ProDis'];
    include('../assets/connection.php');
    $sql = "UPDATE `products` SET `name`='$ProName',`description`='$ProDes',`cost`=$ProCost,`price`=$ProPrice,`discount`=$ProDis WHERE `id`=$product_id";
    $update = mysqli_query($conn,$sql);
    if($update){
         header("Location:../manageproducts.php?&Massage=Sucessfully updated product.");
    }
}

if(isset($_POST['updateInventory'])){
    $Type = $_POST['Type'];
 
    if($Type == "add"){
       $availabale_qty = $_POST['old_qty'];
       $product_id= $_POST['product_id'];
       $newqty = $_POST['newqty'] + $availabale_qty;
       include('../assets/connection.php');
         $sql = "UPDATE `products` SET `qty` = $newqty Where `id` = $product_id";
        $update = mysqli_query($conn,$sql);
        if($update){
             echo $sqladd = "INSERT INTO `stock_log`(`product_id`, `qty`, `type`) VALUES ($product_id,$newqty,'$Type')";
             $add = mysqli_query($conn,$sqladd);
             if($add){
                 header("Location:../manageinventory.php?Massage=Sucessfully updated inventory."); 
             }
            
        }
        
        
    }else if($Type == "sub"){
        $availabale_qty = $_POST['old_qty'];
       $product_id= $_POST['product_id'];
       $newqty = $availabale_qty - $_POST['newqty'];
       include('../assets/connection.php');
         $sql = "UPDATE `products` SET `qty` = $newqty Where `id` = $product_id";
        $update = mysqli_query($conn,$sql);
        if($update){
             echo $sqladd = "INSERT INTO `stock_log`(`product_id`, `qty`, `type`) VALUES ($product_id,$newqty,'$Type')";
             $add = mysqli_query($conn,$sqladd);
             if($add){
                 header("Location:../manageinventory.php?Massage=Sucessfully updated inventory."); 
             }
            
        }
        
    }
    
}
  
if(isset($_POST['updatePoints'])){
    $Type = $_POST['Type'];
 
    if($Type == "add"){
       $availabale_qty = $_POST['old_qty'];
       $user_id= $_POST['product_id'];
       $newqty = $_POST['newqty'] + $availabale_qty;
       $qty = $_POST['newqty'];
       include('../assets/connection.php');
         $sql = "UPDATE `users` SET `rewards_token` = $newqty WHERE `id`=$user_id";
        $update = mysqli_query($conn,$sql);
        if($update){
             $sqladd = "INSERT INTO `rewards`( `user_id`, `name`, `value`) VALUES ($user_id,'Credited by admin',$qty)";
             $add = mysqli_query($conn,$sqladd);
             if($add){
                 header("Location:../managePoints.php?Massage=Sucessfully updated points."); 
             }
            
        }
        
        
    }else if($Type == "sub"){
        $availabale_qty = $_POST['old_qty'];
       $user_id= $_POST['product_id'];
       $newqty = $availabale_qty - $_POST['newqty'];
       $qty = $_POST['newqty'];
       include('../assets/connection.php');
         $sql = "UPDATE `users` SET `rewards_token` = $newqty WHERE `id`=$user_id";
        $update = mysqli_query($conn,$sql);
        if($update){
             echo $sqladd = "INSERT INTO `rewards`( `user_id`, `name`, `value`) VALUES ($user_id,'Debited by admin',$qty)";
             $add = mysqli_query($conn,$sqladd);
             if($add){
                 header("Location:../managePoints.php?Massage=Sucessfully updated points."); 
             }
            
        }
        
    }
    
}
// function sendMessage($userid){
//     require 'connection.php';
//     $sqltaskMembers = "SELECT `id`, `role_id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `notification_token`, `remember_token`, `rewards_token`, `created_at`, `updated_at` FROM `users` WHERE `id` = $userid";
//         $taskMembers = mysqli_query($conn,$sqltaskMembers);
//         $playerId = [];
//         $subject = '';
//         while($row = mysqli_fetch_array($taskMembers)){
//         	     $subject =  $row['firstname'];
//                  array_push($playerId, '1913aa90-d6ce-40b5-8480-f17595f18ab6');           
//             }
            
//                 $content = array(
//                     "en" => ' you got new message '.$subject.'.'
//                     );

//                 $fields = array(
//                     'app_id' => "daa2ba7b-daef-4363-935e-d5138d73cf98",
//                      'include_player_ids' => $playerId,
//                     'data' => array("foo" => "NewMassage","Id" => $taskid),
//                     'large_icon' =>"ic_launcher_round.png",
//                     'contents' => $content
//                 );

//                 $fields = json_encode($fields);
               

//                 $ch = curl_init();
//                 curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
//                 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
//                                                           'Authorization: Basic ODU5ZDhiZjAtOWRkZS00NDIyLWI0ZWItOTYxMDc5YzQzMGIz'));
//                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//                 curl_setopt($ch, CURLOPT_HEADER, FALSE);
//                 curl_setopt($ch, CURLOPT_POST, TRUE);
//                 curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
//                 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    

//                  $response = curl_exec($ch);
//                 curl_close($ch);

               


        
           
               
// }

?>