<?php
include "D:/Program/xampp/htdocs/ecomerce/connect.php";
$email=filterRequest("email");
$verfiycode=filterRequest("verfiycode");

$stmt=$con->prepare("SELECT * FROM user WHERE email ='$email'AND verfiycode='$verfiycode'");

$stmt->execute();

$count=$stmt->rowCount();

if(
    $count>0
){
    echo json_encode(array("status" => "success"));
    
}else{
   
    echo json_encode(array("status" => "failure"));

}