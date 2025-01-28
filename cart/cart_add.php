<?php
include "../connect.php";


$userid=filterRequest("id");

$itemsid=filterRequest("items_id");
$data = array("cart_user_id"=>$userid,"cart_items_id"=>$itemsid);

insertData("cart ",$data,);