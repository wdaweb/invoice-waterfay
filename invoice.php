<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
     .number{
            font-size:1rem;
            color:#FF5151;
            font-weight:bolder;
        }
    body{
            margin:0 auto;
        }
    h5{
        margin:10px;
    }
    .bg{
            background:url("images/templebg.jpg") no-repeat center;
            display:grid;
            min-height: 100vh;
            min-width : 100%;
            align-items:center;
            justify-content:center;
            z-index:-1;
    }
    .box{
        display:grid;
        z-index:100;
    }
    .contain{
        height:550px;
        width:850px;
        background:#fff4f0;
        box-shadow: -5px -5px 5px #ceb9b9 inset;

    }
    .login{
        top:100%;
        width:100%;
        height:200px;
        background:#3B3B3B;
        position: absolute;
        color:#ADADAD;
        display: grid;
        align-items:center;
        justify-content:center;

    }
    .logo{
        width:200px;
    }
    .nav-link:hover{
        background:#d9cbc6!important;
    }
    td,th,tr{
        color:#804040;
    }
    </style>
    <link rel="stylesheet" type="text/css" media="all" href="rwd.css">
</head>
<body>
    <div class="bg">
    <div class="box">
    
    <div class="nav nav-tabs  col-10 mx-auto">
    <?php
        $month=[
            1=>"1,2月",
            2=>"3,4月",
            3=>"5,6月",
            4=>"7,8月",
            5=>"9,10月",
            6=>"11,12月",
        ];

        $m=ceil(date("m")/2);

    ?>

     <div class="nav-item">
            <a class="nav-link active bg-danger text-white"  href="?do=award_numbers">發票兌獎</a>
        </div>
        <div class="nav-item ">
            <a class="nav-link text-secondary" style="background:#fff4f0;" href="invoice.php">消費發票</a>
        </div>
        <div class="nav-item">
            <a class="nav-link text-secondary" style="background:#fff4f0;" href="?do=invoice_list">搜尋發票</a>
        </div>
        <div class="nav-item">
            <a class="nav-link text-secondary" style="background:#fff4f0;" href="?do=add_awards">輸入獎號</a>
        </div>
        <div class="nav-item">
            <a class="nav-link text-secondary" style="background:#fff4f0;" href="lots.php">求籤專區</a>
        </div>
    </div>
    
    
    <div class="contain">
    <div class="col-10 d-flex flex-column p-4 mx-auto" >
    <?php

        if(isset($_GET['do'])){

            $file=$_GET['do'].".php";
            include $file;


        }else{

            include "main.php";
        }

        ?>
    </div>


    </div>
    </div>
    <div class="login">
      <h5>copyright©台北霞海城隍廟<br>
      電話:(02) 2558-0346<br>
　  　地址:台北市大同區迪化街一段61號<br>
      </h5>
      <img src="images/logo1.png" class="logo">
    </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>