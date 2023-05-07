<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 查詢 BMI 指數 </title>
    <style>
    * {
        margin: 0;
        padding: 0;

    }

    h1 {
        margin: 20px;
        text-align: center;
        color: #faa;
    }

    .container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        border: 1px solid #fbb;
        width: 300px;
        height: 100px;
        margin: auto;
        position: relative;
        padding: 20px;
        box-shadow: 0 0 20px #e99;
        border-radius: 10px;
        justify-content: center;
        
    }

    input {
        border: 0px solid #000;
        border-bottom: 2px solid #fdd;
        margin: 10px 2px;
    }

    input.submit {
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

    input.submit:hover {
        background-color: #e99;
        color: #fff;

    }

    h2 {
        color: #999;
        width: 160px;
        margin: 0px;
    }

    h3 {
        color: #999;
        width: 100%;
        margin: -20px 0px;
    }

    h5 {
        color: #999;
        width: 150px;
        margin: -20px 0px;
    }
    </style>
</head>

<body>
    <h1> 您的體態為 ： </h1>
    <br>
    <?php 
    $h=$_POST['bmi_h'];
    $w=$_POST['bmi_w'];
    $bmi= round($w/($h/100*$h/100),2); 

    if($bmi>=27){ 
        $level="吃的太好嘍....";
    }elseif($bmi>24){
        $level="再努力一下下.....";
    }elseif($bmi>20){
        $level="太棒了，要好好保持哦....";
    }else{
        $level="可以多吃一些好料的哦....";
    }
    
    ?>
    <div class="container">
        <h2> BMI ： <?php echo $bmi ?></h2>
        
        <h5> ( 標準值為 ：20 ~ 24 )</h5>
        <br>
        <h3 style="color: red"> <?php echo $level; ?></h3>
    </div>
</body>

</html>





<?php