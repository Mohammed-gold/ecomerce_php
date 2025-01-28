<?php
include "../connect.php";
$email=filterRequest("email");
$verfiycode=filterRequest("verfiycode");

$stmt=$con->prepare("SELECT * FROM user WHERE email ='$email'AND verfiycode='$verfiycode'");

$stmt->execute();

$count=$stmt->rowCount();

if(
    $count>0
){

    $data=array("usersaprove"=>"1");
    updateData("user",$data,"email='$email'");
    
}else{
   
    echo json_encode(array("status" => "failure"));

}