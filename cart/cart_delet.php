<?php
include "../connect.php";


$userid=filterRequest("id");

$itemsid=filterRequest("items_id");
// $data = array("fav_userid"=>$userid,"fav_itemsid"=>$itemsid);

deleteData("cart","cart_id =(SELECT cart_id FROM cart WHERE cart.cart_items_id= $itemsid AND cart_user_id= $userid LIMIT 1)");