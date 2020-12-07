<?php
include_once "base.php";
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/1b66a8f9ef.js" crossorigin="anonymous"></script>
<style>
    html{
        background: rgba(167,102,40,0.5);
    }
    body{
            background: url("images/loginbg.png") no-repeat center;
            display:flex;
            margin:0 auto;
            height:100vh;
            weight:100%;
            align-items:center;
            justify-content:center;
        }
.modal {
    position: fixed; 
    z-index: 1; 
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto;
}
.modal-content {
    background-color:rgba(139,58,58,1);
    margin: auto;
    padding: 20px;
    max-width:350px;
    border: 1px solid #888;
    height:60vh;
    z-index:1;
    position:relative;
}
.close {
    float: right;
    font-size: 28px;
    font-weight: bold;
    color:rgba(255,193,193,1);
}

.require{
    display:flex;
    flex-direction:column;
    margin-left:70px;
    position:absolute;
}
.close:hover{
    color: 	#F75000;
    text-decoration: none;
    cursor: pointer;
}
#inputtext {
    margin:5px;
}
</style>
</head>
<body>

<button id="myBtn" style="border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "><img src="images/requirebtn.png" ></button>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close"><i class="fas fa-grip-lines"></i></span>
    <form action="check1.php" method="post" class="require">   
      <p id="inputtext"><img src="images/idnumber1.png" style="width:100;"><br><input type="text" name='Idcard' style="background:url('images/logintext1.png') no-repeat;width:200px;height:40px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "  maxlength="10" minlength="10">
      <?php
        if(!empty($_SESSION['err1']['a'])){
        echo "<div style='font-size:12px;color:red'>";
        print_r ($_SESSION['err1']['a']);
        echo "</div>";
        }else{
        
        }
        if(!empty($_SESSION['err1']['b'])){
            echo "<div style='font-size:12px;color:white'>";
            print_r ($_SESSION['err1']['b']);
            echo "</div>";
            }else{
            
            }
        ?>
      </p>
      <p id="inputtext"><img src="images/loginpw1.png" ><br><input type="password" name='pw' style="background:url('images/logintext1.png') no-repeat;width:200px;height:40px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "  maxlength="8" minlength="4">
      <?php
        if(!empty($_SESSION['err1']['c'])){
            echo "<div style='font-size:12px;color:white'>";
            print_r ($_SESSION['err1']['c']);
            echo "</div>";
            }else{
            
            }
        ?>
      </p>
      <p id="inputtext"><img src="images/logindate.png" style="width:100;"><br><input type="date" name='birthday' style="background:url('images/logintext1.png') no-repeat;width:200px;height:40px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "  maxlength="10" minlength="10"></p>
      <p id="inputtext"><img src="images/loginemail.png" style="width:100;"><br><input type="email" name='email'  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required style="background:url('images/logintext1.png') no-repeat;width:200px;height:40px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "></p>
      <!-- <input type="hidden" name="time" value="time"> -->
      <br>
      <div style="float:left;">
      <input type="submit" value="" style="background:url('images/loginsubmit1.png') no-repeat;width:100px;height:40px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); ">
      <input type="reset" value="" style="background:url('images/loginsubmit2.png') no-repeat;width:100px;height:40px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); ">
      </div>
    </form>
  </div>
  </div>

</body>
</html>
