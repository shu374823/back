<?php

session_start();
$acc='admin';
$pw='1234';

if($_POST['acc']==$acc && $_POST['pw']==$pw){
    echo "登入成功"；
    $_SESSION['login']=$acc;
}else{
    echo "賬號或密碼錯誤"；
    $_SESSION['error']="賬號或密碼錯誤";
}


?>