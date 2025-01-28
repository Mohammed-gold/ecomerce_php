<?php
include "../connect.php";


$userid=filterRequest("id");



  $data=getAllData("cartviwe","cart_user_id=$userid",null,false);

  $stmt=$con->prepare("SELECT SUM(cartItemsPrice) as totalprice,COUNT(itemscount) AS totalcount FROM cartviwe WHERE cartviwe.cart_user_id=$userid
GROUP BY cartviwe.cart_user_id");

$stmt->execute();

$count_price=$stmt->fetch(PDO::FETCH_ASSOC);


echo json_encode(array("sucsses"=>"true","data"=>$data,"tot_co_price"=>$count_price));


