<?php
include "../connect.php";
//  include "../functions.php";


$email=filterRequest("email");

$password=sha1($_POST["password"]);

$stmt =$con->prepare("SELECT * FROM user where email= ? AND password= ? AND usersaprove = 1" );
$stmt->execute(array($email,$password));

$count=$stmt->rowCount();
if($count>0){
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode(array("success" => true,"data"=>$data));

}else{
    echo json_encode(array("success" => false));
}
