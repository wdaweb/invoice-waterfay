<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    .box1{
        display:inline-flex;
        align-items:center;
        justify-content:center;
        z-index:100;
    }
    .invoice{
        height:550px;
        width:400px;
        background:white;
        display:grid;
        align-items:center;
        justify-content:center;
        border-radius:10px;
    }
    .temple{
        height:550px;
        width:400px;
        background:#fff4f0;
        display:grid;
        align-items:center;
        justify-content:center;
        border-radius:10px;
    }
    .invoice:hover{
        background:#d9cbc6;
    }
    .temple:hover{
        background:#d9cbc6;
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
    </style>
<link rel="stylesheet" type="text/css" media="screen" href="rwd.css">
</head>
<body>
    <div class="bg">
    <div class="box1">
    <div class="invoice"><a href="invoice.php"><img src="images/invoicebg.png" alt=""></a></div>
    <div class="temple"><a href="lots.php"><img src="images/templebg.png" alt=""></a></div>
    </div>
  <div class="login">
      <h5>copyright©台北霞海城隍廟<br>
      電話:(02) 2558-0346<br>
　  　地址:台北市大同區迪化街一段61號<br>
      </h5>
      <img src="images/logo1.png" alt="">
    </div>
    </div>
</body>
</html>