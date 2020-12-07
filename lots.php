<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <style>
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
    .contain1{
        height:550px;
        width:850px;
        background:#fff4f0;
        box-shadow: -5px -5px 5px #ceb9b9 inset;
        border-radius:10px;
        position:relative;
    }
    .login{
        top:100%;
        width:100%;
        height:200px;
        background:#3B3B3B;
        position: absolute;
        color:#ADADAD;
    }
    .logo{
        width:200px;
    }
    .lots{
        position:absolute;
        translate:(-65%,-65%);
        top:30%;
        left:35%;
    }
    p{
        position:absolute;
        translate:(-50%,-50%);
        top:70%;
        left:47%;
        color:#804040;
    }
    </style>
    <link rel="stylesheet" type="text/css" media="all" href="rwd.css">
</head>
<body>
<div class="bg">
    <div class="box">
    <div class="nav nav-tabs justify-content-end col-10 mx-auto">
     <div class="nav-item">
            <a class="nav-link active bg-danger text-white"  href="invoice.php">發票專區</a>
        </div>
        <div class="nav-item">
            <a class="nav-link text-secondary" style="background:#fff4f0;" href="login.php">我要登出</a>
        </div>
    </div>
    
    
    <div class="contain1">
            <!-- <div class="col-5 d-flex p-4 mx-auto" > -->
    <?php

        if(isset($_GET['do1'])){

            $file=$_GET['do1'].".php";
            include $file;


        }else{

            include "main2.php";
        }

        ?>
    <!-- </div> -->
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