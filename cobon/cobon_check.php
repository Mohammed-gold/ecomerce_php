<?php
include "../connect.php";


$cobonN=filterRequest("cobonN");
$date=date("Y-m-d H:i:s");



$stmt=$con->prepare("SELECT * FROM Copon Where Copon_name ='$cobonN' AND 'cobon_date' > '$date'");

$stmt->execute();

$count=$stmt->rowCount();
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if(
    $count > 0
){
    echo json_encode(array("status" => "suss","data"=>$data));

    
    
}else{
   
    echo json_encode(array("status" => "failure"));

}
