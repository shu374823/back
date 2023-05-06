<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 查詢 BMI 指數 </title>
    <style>
        *{
            margin: 0;
            padding: 0;

        }

        h1{
            margin: 20px;
            text-align: center;
            color: #faa;
        }

        .container{
            display: flex;
            border: 1px solid #fbb;
            width: 300px;
            height: 100px;
            margin: auto;
            position: relative;
            padding: 20px;
            box-shadow: 0 0 20px #e99;
            border-radius: 10px;
        }

        input{
            border: 0px solid #000;
            border-bottom: 2px solid #fdd;
            margin: 10px 2px;
        }

        input.submit{
            position: relative;
            position: absolute;
            right: 10px;
            bottom: 10px;
            border: 1px solid #faa;
            width: 60px;
            height: 20px;
            border-radius: 3px;
            background-color: #fdd;
            color: #f00;
        }
        
        input.submit:hover{
            background-color: #e99;
            color: #fff;

        }

        label{
            color: #999;
        }

    </style>
</head>
<body>
    <h1> 請輸入您的資料 </h1>
    <br>
    <div class="container">
        <form action="bmi_f.php" method="get">
            <label for="h"> 身高 ： </label>
            <input type="number" name="bmi_h" id="h">
            <label for="h"> （公分） </label>
            <label for="w"> 體重 ： </label>
            <input type="number" name="bmi_w" id="w">
            <label for="w"> （公斤） </label>
            <input type="submit" value="@ BMI" class="submit">
        </form>
    </div>
</body>
</html>





<?php

