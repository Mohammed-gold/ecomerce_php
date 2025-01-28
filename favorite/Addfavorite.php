<?php
include "../connect.php";


$userid=filterRequest("id");

$itemsid=filterRequest("items_id");
$data = array("fav_userid"=>$userid,"fav_itemsid"=>$itemsid);

insertData("favorite",$data,);