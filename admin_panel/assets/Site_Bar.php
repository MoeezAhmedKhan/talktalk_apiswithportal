<?php

session_start();

 $currentFile = $_SERVER["SCRIPT_NAME"];
      $parts = Explode('/', $currentFile);
      $currentFile = $parts[count($parts) - 1];    
?>

<html>
    <head>

    </head>
    <body>
     <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
              <div class="brand-logo"></div>
              <h2 class="brand-text mb-0">Chanti</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
<!--           <li class=" nav-item"><a href="index.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            <ul class="menu-content">
            <?php if($currentFile=="index.php"){?>
              <li class="active nav-item"><a href="index.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
              </li>
             <?php }else{ ?>
              <li class="nav-item"><a href="index.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
              </li>
             <?php } ?>
            </ul>
          </li> -->
          
          </li>
         
         
           <li class=" navigation-header"><span>Data</span>
          </li>
            
           <?php if($currentFile=="index.php"){?>
          <li class="active nav-item"><a href="index.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Analytics</span></a>
          </li>
           <?php }else{ ?>
            <li class=" nav-item"><a href="index.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Analytics</span></a>
          </li>
           <?php } ?>
         
    
          <li class=" navigation-header"><span>Enter Data Options</span>
          </li>
          
            
           <?php 
                
                require_once('connection.php');
                $check_cat = "SELECT pb.id, pb.user_id, pb.p_id,p.privelage,pb.status FROM `privelages_bt` pb INNER JOIN `privelages` p ON pb.p_id = p.p_id WHERE p.p_id = 2 AND pb.user_id = {$_SESSION['userID']} AND pb.status = 'active'";
                $check_cat_exec = mysqli_query($conn, $check_cat);
           
                if(mysqli_num_rows($check_cat_exec) > 0  || $_SESSION['user_type'] == 0)
                {
                    $arr = mysqli_fetch_array($check_cat_exec);
                    $_SESSION["privelage"] = $arr['privelage'];
                    
                    if($currentFile=="addquestion_category.php")
                    {
                        ?>
                       <li class="active nav-item"><a href="addquestion_category.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Cateogry</span></a>
                       </li>
                       <?php
                    }
                   else
                   {
                       ?>
                       <li class=" nav-item"><a href="addquestion_category.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Cateogry</span></a>
                       </li>
                       <?php 
                   } 
                }
           
           ?>
        
         <?php
         
         require_once('connection.php');
         $check_cat = "SELECT pb.id, pb.user_id, pb.p_id,p.privelage,pb.status FROM `privelages_bt` pb INNER JOIN `privelages` p ON pb.p_id = p.p_id WHERE p.p_id = 3 AND pb.user_id = {$_SESSION['userID']} AND pb.status = 'active'";
         $check_cat_exec = mysqli_query($conn, $check_cat);
         if(mysqli_num_rows($check_cat_exec) > 0  || $_SESSION['user_type'] == 0)
         {
            $arr = mysqli_fetch_array($check_cat_exec);
            $_SESSION["privelage"] = $arr['privelage'];
            
             if($currentFile=="add_questions.php")
             {
                 ?>
                   <li class="active nav-item"><a href="add_questions.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Question</span></a>
                   </li>
                 <?php
             }
             else
             {
                ?>
                 <li class=" nav-item"><a href="add_questions.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Question</span></a>
                 </li>
               <?php 
             }
             
         }
             
         
         ?>
         
           
            <?php
            
            require_once('connection.php');
            $check_cat = "SELECT pb.id, pb.user_id, pb.p_id,p.privelage,pb.status FROM `privelages_bt` pb INNER JOIN `privelages` p ON pb.p_id = p.p_id WHERE p.p_id = 5 AND pb.user_id = {$_SESSION['userID']} AND pb.status = 'active'";
            $check_cat_exec = mysqli_query($conn, $check_cat);
            if(mysqli_num_rows($check_cat_exec) > 0  || $_SESSION['user_type'] == 0)
            {
                $arr = mysqli_fetch_array($check_cat_exec);
                $_SESSION["privelage"] = $arr['privelage'];
                
                if($currentFile=="addtip.php")
                {
                    ?>
                   <li class="active nav-item"><a href="addtip.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Add Tip</span></a>
                   </li>
                  <?php
                }
               else
               {
                   ?>
                   <li class=" nav-item"><a href="addtip.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Add Tip</span></a>
                   </li>
                   <?php
               }
            }
           
           ?>
           
           
            <?php
            
                if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "0")
                {
                    if($currentFile=="create_admin.php")
                    {
                        ?>
                        <li class="active nav-item"><a href="create_admin.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Create Admin</span></a>
                        </li>
                        <?php 
                    }
                    else
                    { 
                         ?>
                         <li class=" nav-item"><a href="create_admin.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Create Admin</span></a>
                         </li>
                       <?php
                     }         
                }
            
                 
            ?>
        
          <!--<?php if($currentFile=="addpackages.php"){?>-->
          <!--<li class="active nav-item"><a href="addpackages.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Packages </span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addpackages.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Packages </span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
           
           
          <!--  <?php if($currentFile=="opengym.php"){?>-->
          <!--<li class="active nav-item"><a href="opengym.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Open Gym </span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="opengym.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Open Gym </span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->

          <!--<?php if($currentFile=="addshedule.php"){?>-->
          <!--<li class="active nav-item"><a href="addshedule.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Exercises</span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addshedule.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Exercises</span></a>-->
          <!--</li>-->
          <!--<?php } ?>-->
          
          <!--<?php if($currentFile=="addclassess.php"){?>-->
          <!--<li class="active nav-item"><a href="addpackages.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Classes </span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addclasses.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Classes </span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
          <!-- <?php if($currentFile=="addaboutus.php"){?>-->
          <!--<li class="active nav-item"><a href="addaboutus.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add About Us </span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addaboutus.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add About Us </span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
          
          <!-- <?php if($currentFile=="addnewProduct.php"){?>-->
          <!--<li class="active nav-item"><a href="addnewProduct.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">New Product</span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addnewProduct.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">New Product</span></a>-->
          <!--</li>-->
          <!--<?php } ?>-->
          
          
          <!-- <?php if($currentFile=="addslider.php"){?>-->
          <!--<li class="active nav-item"><a href="addslider.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Slider Product</span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addslider.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Slider</span></a>-->
          <!--</li>-->
          <!--<?php } ?>-->
          
          
          
          <li class=" navigation-header"><span>View the Details</span></li>
          
          
            <?php
        
        require_once('connection.php');
        $check_cat = "SELECT pb.id, pb.user_id, pb.p_id,p.privelage,pb.status FROM `privelages_bt` pb INNER JOIN `privelages` p ON pb.p_id = p.p_id WHERE p.p_id = 4 AND pb.user_id = {$_SESSION['userID']} AND pb.status = 'active'";
        $check_cat_exec = mysqli_query($conn, $check_cat);
        if(mysqli_num_rows($check_cat_exec) > 0  || $_SESSION['user_type'] == 0)
        {
            $arr = mysqli_fetch_array($check_cat_exec);
            $_SESSION["privelage"] = $arr['privelage'];
            
            if($currentFile=="manage_notification.php")
            {
                ?>
                 <li class="active nav-item"><a href="manage_notification.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Manage Notification</span></a>
                 </li>
                <?php
            }
            else
            { 
                  ?>
                  <li class=" nav-item"><a href="manage_notification.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Manage Notification</span></a>
                  </li>
                  <?php
            } 
        }
         
        ?>
          
          
          
          <?php
          
           require_once('connection.php');
           $check_cat = "SELECT pb.id, pb.user_id, pb.p_id,p.privelage,pb.status FROM `privelages_bt` pb INNER JOIN `privelages` p ON pb.p_id = p.p_id WHERE p.p_id = 6 AND pb.user_id = {$_SESSION['userID']} AND pb.status = 'active'";
           $check_cat_exec = mysqli_query($conn, $check_cat);
           
           if(mysqli_num_rows($check_cat_exec) > 0  || $_SESSION['user_type'] == 0)
           {
               $arr = mysqli_fetch_array($check_cat_exec);
               $_SESSION["privelage"] = $arr['privelage'];
               
              if($currentFile=="managecat.php")
              {
                  ?>
                   <li class="active nav-item"><a href="managecat.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Categories</span></a>
                  </li>
                  <?php
              }
              else
              { 
                  ?>
                     <li class=" nav-item"><a href="managecat.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Categories</span></a>
                  </li>
                   <?php
               } 
           }
           
           ?>
           
           
            <?php
            
           require_once('connection.php');
           $check_cat = "SELECT pb.id, pb.user_id, pb.p_id,p.privelage,pb.status FROM `privelages_bt` pb INNER JOIN `privelages` p ON pb.p_id = p.p_id WHERE p.p_id = 7 AND pb.user_id = {$_SESSION['userID']} AND pb.status = 'active'";
           $check_cat_exec = mysqli_query($conn, $check_cat);
           
           if(mysqli_num_rows($check_cat_exec) > 0 || $_SESSION['user_type'] == 0)
           {
               
               $arr = mysqli_fetch_array($check_cat_exec);
               $_SESSION["privelage"] = $arr['privelage'];
            
                if($currentFile=="manage_questions.php")
                {
                    ?>
                    <li class="active nav-item"><a href="manage_questions.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Questions</span></a>
                    </li>
                    <?php
                }
                else
                { 
                    ?>
                     <li class=" nav-item"><a href="manage_questions.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Questions</span></a>
                     </li>
                   <?php
                } 
            
           }
           
           ?>
           
           
           
           
           <?php
            
           require_once('connection.php');
           $check_cat = "SELECT pb.id, pb.user_id, pb.p_id,p.privelage,pb.status FROM `privelages_bt` pb INNER JOIN `privelages` p ON pb.p_id = p.p_id WHERE p.p_id = 8 AND pb.user_id = {$_SESSION['userID']} AND pb.status = 'active'";
           $check_cat_exec = mysqli_query($conn, $check_cat);
           
           if(mysqli_num_rows($check_cat_exec) > 0 || $_SESSION['user_type'] == 0)
           {
               
               $arr = mysqli_fetch_array($check_cat_exec);
               $_SESSION["privelage"] = $arr['privelage'];
            
                if($currentFile=="manage_tips.php")
                {
                    ?>
                    <li class="active nav-item"><a href="manage_tips.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Tips</span></a>
                    </li>
                    <?php
                }
                else
                { 
                    ?>
                     <li class=" nav-item"><a href="manage_tips.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Tips</span></a>
                     </li>
                   <?php
                } 
            
           }
           
           ?>
           
           
          <!--<?php if($currentFile=="managerestuarant.php"){?>-->
          <!-- <li class="active nav-item"><a href="managerestuarant.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Restuarant</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="managerestuarant.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Restuarant</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
           
           <?php
           
           if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "0")
           {
               
               $arr = mysqli_fetch_array($check_cat_exec);
               $_SESSION["privelage"] = $arr['privelage'];
           
               if($currentFile=="manageusers.php")
               {
                   ?>
                   <li class="active nav-item"><a href="manageusers.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Users</span></a>
                  </li>
                  <?php
               }
               else
               { 
                  ?>
                     <li class=" nav-item"><a href="manageusers.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Users</span></a>
                  </li>
                   <?php
               }
               
           }
           
           ?>
           
           
           
           <?php
           
           if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "0")
           {
               
               $arr = mysqli_fetch_array($check_cat_exec);
               $_SESSION["privelage"] = $arr['privelage'];
           
               if($currentFile=="control_subadmin.php")
               {
                   ?>
                   <li class="active nav-item"><a href="control_subadmin.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Control Sub Admin</span></a>
                  </li>
                  <?php
               }
               else
               { 
                  ?>
                     <li class=" nav-item"><a href="control_subadmin.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Control Sub Admin</span></a>
                  </li>
                   <?php
               }
               
           }
           
           ?>
           
           
           <?php
           
           if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "0")
           {
               
               $arr = mysqli_fetch_array($check_cat_exec);
               $_SESSION["privelage"] = $arr['privelage'];
           
               if($currentFile=="manage_subadmin.php")
               {
                   ?>
                   <li class="active nav-item"><a href="manage_subadmin.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sub Admin</span></a>
                  </li>
                  <?php
               }
               else
               { 
                  ?>
                     <li class=" nav-item"><a href="manage_subadmin.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sub Admin</span></a>
                  </li>
                   <?php
               }
               
           }
           
           ?>
           
         


          <!-- <?php if($currentFile=="manageconsumer.php"){?>-->
          <!-- <li class="active nav-item"><a href="manageconsumer.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Consumers</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="manageconsumer.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Consumers</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
              
           
          <!--   <?php if($currentFile=="transaction_records.php"){?>-->
          <!-- <li class="active nav-item"><a href="transaction_records.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Transactions</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="transaction_records.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Transactions</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
           
          <!--<?php if($currentFile=="opengym.php"){?>-->
          <!-- <li class="active nav-item"><a href="opengym.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Open Gym</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="opengym.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Open Gym</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->



          
           
           
          <!--<?php if($currentFile=="viewcategories.php"){?>-->
          <!-- <li class="active nav-item"><a href="viewcategories.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Category</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="viewcategories.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Category</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->


          <!-- <?php if($currentFile=="SubCat.php"){?>-->
          <!-- <li class="active nav-item"><a href="SubCat.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sub Category</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="SubCat.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sub Category</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
           
          <!--  <?php if($currentFile=="manageSliders.php"){?>-->
          <!-- <li class="active nav-item"><a href="manageSliders.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sliders</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="manageSliders.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sliders</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
           
          <!--<?php if($currentFile=="managePoints.php"){?>-->
          <!-- <li class="active nav-item"><a href="managePoints.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Points</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="managePoints.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Points</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->


          <!--   <?php if($currentFile=="SendNotifications.php"){?>-->
          <!-- <li class="active nav-item"><a href="SendNotifications.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Notifications</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="SendNotifications.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Notifications</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->




          
          
          
          
          
          
          
        
             
        </ul>
      </div>
    </div>
    </body>
</html>