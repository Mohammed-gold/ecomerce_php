<?php
include "../connect.php";


$userid=filterRequest("id");

// $itemsid=filterRequest("items_id");
$data = array($userid,);

getAllData("myfavorite","fav_userid = ? ",$data,);