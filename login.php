<?php 
include_once "base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發票抽籤系統</title>
    <style>
        body{
            background:url("images/loginbg.png") no-repeat center;
            display:flex;
            margin:0 auto;
            height:100vh;
            weight:100%;
            align-items:center;
            justify-content:center;
        }
        body{
            background:url("images/loginbg.png") no-repeat center;
            display:flex;
            margin:0 auto;
            height:100vh;
            weight:100%;
            align-items:center;
            justify-content:center;
        }
        .require{
            color:darkred;
            margin:65px;
        }
        .require:hover{ 
            color:pink;
            text-decoration:none;
        }
    </style>
</head>
<body>

    <div class="login">
    <form action="check.php" method="post">    
        <p><img src="images/idnumber.png" style="width:100;"><br><input type="text" name='Idcard' style="background:url('images/logintext.png') no-repeat;width:200px;height:50px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "  maxlength="10" minlength="10">
        <?php
        if(!empty($_SESSION['err'])){
        echo "<div style='font-size:12px;color:red'>";
        print_r ($_SESSION['err']);
        echo "</div>";
        }else{
        
        }
        ?></p>
        <p><img src="images/loginpw.png" ><br><input type="password" name='pw' style="background:url('images/logintext.png') no-repeat;width:200px;height:50px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "  maxlength="8" minlength="4"></p>
        <a href="require.php" class="require">我想加入</a> 
        <p><input type="submit" value="" style="background:url('images/loginsubmit.png') no-repeat;width:200px;height:40px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "></p>
    </form>
    </div>
    <link rel="stylesheet" type="text/css" media="screen" href="rwd.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>   <!--不一定會用到-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>