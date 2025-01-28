<?php
include "../connect.php";
$email=filterRequest("email");
// $verfiycode=filterRequest("verfiycode");

$stmt=$con->prepare("SELECT * FROM user WHERE email ='$email' AND usersaprove = '1' ");

$stmt->execute();

$count=$stmt->rowCount();

if(
    $count > 0
){
    echo json_encode(array("status" => "1"));

    
    
}else{
   
    echo json_encode(array("status" => "failure"));

}