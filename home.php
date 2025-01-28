<?php
include "./connect.php";

$alldata=array();
$alldata['success']="true";
$catogre=getAllData("categories",null,null,json :false);

$items=getAllData("items1viwe",null,null,json :false);
$alldata['catogre']=$catogre;
$items=getAllData("items1viwe",null,null,json :false);
$alldata['items']=$items;

echo json_encode($alldata);


?>