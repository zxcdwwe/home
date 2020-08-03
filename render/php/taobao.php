<?php
header('content-type:text/html;charset=utf-8');
include "conn.php";

if(isset($_POST["submit"])){
    $user = $_POST["username"];
    $password = sha1($_POST["password"]);
    $email = $_POST["email"];
    echo $user;
    echo $password;
    $conn ->query("insert taobaogoods values(null,'$user','$password','$email')");
}else{
    exit('非法操作');
}
?>