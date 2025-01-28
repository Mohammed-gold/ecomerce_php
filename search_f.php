<?php
include "./connect.php";
$itemnaname=filterRequest("itemsname");

getAllData("myfavorite","Items_name LIKE '%$itemnaname%'  OR  items_name_ar LIKE '%$itemnaname%'  ");


?>