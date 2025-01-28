<?php
include "../connect.php";


$favid=filterRequest("id");



deleteData("favorite","fav_id = $favid");