<?php
include "../connect.php";


$cobonN=filterRequest("cobonN");
$date=date("Y-m-d H:i:s");



// $stmt=$con->prepare("SELECT * FROM Copon Where Copon_name =? AND date > '$date'");

// $stmt-> execute(array("$cobonN"));
// 
// $count=$stmt->rowCount();
// $data = $stmt->fetch(PDO::FETCH_ASSOC);
// 
// if(
//     $count > 0
// ){
//     echo json_encode(array("sucsses" => "true","data"=>$data));
// 
//     
//     
// }else{
//    
//     echo json_encode(array("sucsses" => "false"));
// 
// }
getAllData("copon"," Copon_name ='$cobonN'  AND date > '$date'");
