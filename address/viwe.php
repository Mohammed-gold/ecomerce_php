<?php
include "../connect.php";


$add_usersid=filterRequest("add_usersid");



getAllData("adress","add_usersid=$add_usersid");