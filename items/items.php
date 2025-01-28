<?php
include "../connect.php";
$catid=filterRequest("cat_id");
$userid=filterRequest("id");

// getAllData("itemsviwe","cat_id= $catid");
$stmt=$con->prepare("SELECT items1viwe.* , 1 as favorite , (items_price -(items_price*items_discount/100) ) as items_P_d FROM items1viwe
                                     
INNER JOIN favorite ON favorite.fav_itemsid=items1viwe.items_id AND favorite.fav_userid=$userid WHERE  cat_id =$catid
UNION ALL SELECT * , 0 as favorite  , (items_price -(items_price*items_discount/100) ) as items_P_d 

                                      FROM items1viwe  WHERE cat_id=$catid AND items1viwe.items_id NOT IN (SELECT items1viwe.items_id FROM items1viwe
INNER JOIN favorite ON favorite.fav_itemsid=items1viwe.items_id AND favorite.fav_userid=$userid)
");
$stmt ->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
$count=$stmt->rowCount();
if($count>0){
    echo json_encode(array("success" => "true", "data" => $data));
}
else{
    echo json_encode(array("success" => "false"));
}

?>