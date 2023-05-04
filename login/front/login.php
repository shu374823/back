<?php
// 判斷 $_SESSION['login'] 是否存在。
// 是 ：echo $_SESSION['login']
// 否 ：在 form top echo “帳號或密碼錯誤！”
if(isset($_SESSION['login'])){
    echo "歡迎，". $_SESSION['login'];
    echo "<a href= './common/logout.php'>登出</a>";
}else{
?>
<!-- insert login's id && pw form  -->
<form action="./api/check.php" method= "post">
    <div>
        <div>
            <?php
            if(isset($_SESSION['error'])){
                echo " 帳號或密碼錯誤 ";
            }
            ?>
        </div>
        <div>
            <label for="idacc">帳號id ：</label>
            <input type="text" name= "acc" id= "idacc">
        </div>
        <div>
            <label for="idpw">帳號id ：</label>
            <input type="password" name= "pw" id= "idpw">
        </div>
        <div>
            <input type="submit" value= "登入">
        </div>
    </div>
</form>
<?php
}
?>