<?php
include "../connect.php";


$add_id=filterRequest("add_id");
//


deleteData("adress","add_id=$add_id");