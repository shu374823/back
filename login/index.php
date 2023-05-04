<!-- 引入 comm.php 中 session_start() 功能-->
<!--  -->
<?php include_once "./common/comm.php";
    $here= $_GET['here']??'front';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div>
            <!-- 將判斷結果 echo 到 header -->
            <!-- 判斷 $_SESSION 中是否有 login 。有 ：echo 歡迎... ；否 ： -->
            <?php
                if(isset($_SESSION['login'])){
                    echo "歡迎 : ";
                    echo $_SESSION['login'];
                    echo "<a href='./common/logout.php'";
                }
            ?>
        </div>
        <div>
            <!-- insert menu list in header -->
            <ul>
                <li><a href="index.php">首頁</a></li>
                <li>產品</li>
                <li>關於我們</li>
                <li>
                    <?php
                    switch($here){
                        case "front":
                            include "./front/guest.php";
                        break;
                        case "member":
                            include "./front/vip.php";
                        break;
                    }
                    ?>
                </li>
                <?php
                if(isset($_SESSION['login'])){
                    echo "<li>";
                    echo "<a href= '?here= member'> 會員中心 </a>";
                    echo "</li>";
                }
                ?>
            </ul>


        </div>
        <div>
            <span>選單</span>
        </div>
    </header>
    <?php
switch($here){
    case 'front':
        include "./front/login.php";
    break;
    case 'member':
        include "./front/member_center.php";
    break;
}
?>
</body>
</html>