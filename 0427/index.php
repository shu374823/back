<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #eee;

        }
        
        .container{
            border: 6px solid #ccc;
            border-style: double;
            margin: 10px 50px;
            padding: 10px;
            background-color: #fff;
            height: 70vh;
            /* align-content: center; */
        }
        .logo{
            width: 80%;
            border-bottom: 2px  solid #222;
            /* height: 120px; */
            text-align: center;
            padding: 6px;
            margin: auto;
        }
        nav{
            border-bottom: 1px solid #aaa;
            width: 80%;
            margin: auto;
        }
        img{
            /* align: center; */
            width: 30%;
        }
        hr{
            width: 80%;
        }
        /* .upline{
            border: 1px solid ;
        } */
        /* nav{
        } */
        ul{
            width: 90%;
            text-align: center;
            text-decoration: none;
            list-style-type: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        li{
            margin: 0px 20px;
            color: #aaa;
        }
        a{
            text-decoration: none;
            color: #999;
        }
        a:hover{
            color: #eee;
        }
        .img{
            /* text-align: center; */
            margin: auto;
            width: 80%;
        }
        p{
            text-align: left;
            width: 70%;
            margin: auto;
            padding-left: 50px;
            text-indent: -3em;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <h2>PHP 練習範例</h2>
        </div>
        <!-- <hr class="upline"> -->
        <nav>
            <ul>
                <li> <a href=""> HOME</a></li>
                <li> <a href="./age/age_form.php"> AGE</a></li>
                <li> <a href="./cal/calendar.php"> CALENDAR</a></li>
                <li> <a href="./login/login.php"> LOGIN</a></li>
                <li> <a href="./s20230428_06_postion_relative.html">RELATIVE</a></li>
                <li> <a href="./s20230428_07_postion_fixed.html">FIXED</a></li>
            </ul>
        </nav>
        <!-- <hr class="down"> -->
        <br>
        <div class="img">
            <!-- <img src="./images/content.png" style="width: 100%;height: 100%;"alt=""> -->
        </div>
        <div class="footer">
            <p>AGE: 以get表單傳送資料給target.php，target.php接收資料後，利用if else 判斷出資料是否存在及年齡所在的區間。</p>
            <p>CALENDAR: 萬年曆的資料用div承接。</p>
            <p>: 。</p>
        </div>
    </div>

</body>

</html>