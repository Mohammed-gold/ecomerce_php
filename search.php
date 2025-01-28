<?php
include "./connect.php";
$itemnaname=filterRequest("itemsname");

getAllData("items1viwe","Items_name LIKE '%$itemnaname%'  OR  items_name_ar LIKE '%$itemnaname%'  ");


?>