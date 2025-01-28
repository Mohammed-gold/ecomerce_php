<?php
include "D:/Program/xampp/htdocs/ecomerce/connect.php";

$email=filterRequest("email");
$verfiycode=rand(10000,99999);
$password=mt_rand(10000000,99999999);

$stmt=$con->prepare("SELECT * FROM user WHERE email = '$email'");

$stmt->execute();

$count=$stmt->rowCount();

if(
    $count>0
){

    $data=array("verfiycode"=>$verfiycode,"password"=>$password);
    updateData("user",$data,"email='$email'");
    
}else{
   
    echo json_encode(array("success" => "true"));

}