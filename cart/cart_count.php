<?php
include "../connect.php";


$userid=filterRequest("id");

$itemsid=filterRequest("items_id");

 $stmt=$con->prepare("SELECT COUNT(cart.cart_id) as countitems FROM cart WHERE cart_user_id = $userid and cart_items_id = $itemsid");
 $stmt->execute();
 $data = $stmt->fetchColumn();
$counta =$stmt->rowCount();



if($counta > 0){

  echo  json_encode(array("success"=> "true","data" => intval($data)));

}else{
    echo  json_encode(array("success"=> "true","data" =>0));
}

