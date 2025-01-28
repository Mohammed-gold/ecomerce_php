<?php
include "../connect.php";


$add_name=filterRequest("add_name");
$add_id=filterRequest("add_id");

$add_city=filterRequest("add_city");

$add_street=filterRequest("add_street");

$add_lat=filterRequest("add_lat");

$add_long=filterRequest("add_long");
// 
// $add_usersid=filterRequest("add_usersid");

$data=array(,"add_name"=>$add_name,"add_lat"=>$add_lat,"add_long"=>$add_long,"add_city"=>$add_city,"add_street"=>$add_street);

updateData("adress",$data,"add_id =$add_id");

