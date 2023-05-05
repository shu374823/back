<?php
// 引入 comm 中 session_start() 功能
include_once('../common/comm.php');

// insert acc & pw 變數
$acc= 'admin';
$pw= '1234';

// 判斷 acc && pw 是否正確
if($_post['acc']== $acc && $_POST['pw']== $pw){
    $_SESSION['login']= $acc;

    // 判斷 $_SESSION['error'] 是否存在,若存在則刪除
    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
    }
    // redirect the browser to location:url
    header("location: ../index.php?here=member");
}else{
    // asign "帳號或密碼錯誤" to $_SESSION['error']
    $_SESSION['error']= "帳號或密碼錯誤";
    
    // 判斷 $_SESSION['login'] 是否存在,若存在則刪除
    if(isset($_SESSION['login'])){
        // unset($_SESSION['login']);
    }
    // redirect the browser to location:url
    header("location: ../index.php");

}

?>