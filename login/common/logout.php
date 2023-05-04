<?php
// 引入 comm 中 session_start（）功能
include_once('comm.php');

// 刪除 error && login
unset($_SESSION['error']);
unset($_SESSION['login']);

// redirect the browser to location：index.php
header("location: ../index.php");
?>