<?php
include('connection.php');

$sql = "SELECT COUNT(s.id) as top,s.user_id,u.name , u.profilepic FROM `streak` s  INNER JOIN `users` u ON u.id = s.user_id GROUP BY `user_id`";
$exec = mysqli_query($conn , $sql);
$names = array();
$positions = array();

while($row = mysqli_fetch_array($exec)){
    array_push($names,$row['name']);
       array_push($positions,$row['top']);
}

         $data = ["status"=>true,
                "xValues"=>$names,
                "yValues"=>$positions
                ];
                echo json_encode($data); 





?>