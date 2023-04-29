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
            width: 100%;
            /* height: 120px; */
            text-align: center;
            padding: 6px;
            margin: auto;
        }
        img{
            /* align: center; */
            width: 30%;
        }
        hr{
            width: 80%;
        }
        .upline{
            border: 1px solid ;
        }
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
            width: 80%;
            margin: auto;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <h2>CSS範例</h2>
        </div>
        <hr class="upline">
        <nav>
            <ul>
                <li> <a href=""> HOME</a></li>
                <li> <a href="./s20230428_02_float_example.html"> FLOAT</a></li>
                <li> <a href="./s20230428_03_position.html"> POSITION</a></li>
                <li> <a href="./s20230428_04_stcky_ad.html"> STICKY</a></li>
                <li> <a href="./s20230428_06_postion_relative.html">RELATIVE</a></li>
                <li> <a href="./s20230428_07_postion_fixed.html">FIXED</a></li>
            </ul>
        </nav>
        <hr class="down">
        <br>
        <div class="img">
            <img src="./images/content.png" style="width: 100%;height: 100%;"alt="">
        </div>
        <div class="footer">
            <p>float: 此屬性設定的效果在於取消物件（或容器）的inline及block的特性，而將物件置放在容器的left或right。</p>
            <p>: 。</p>
        </div>
    </div>

</body>

</html>