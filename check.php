<?php 
include_once "base.php";
$_SESSION['login_session']=[];
$_SESSION['err']=[];

$Idname=['A','B','C','D','E','F','G','H','I','J','K','L','M','N',
'O','P','Q','R','S','T','U','V','W','X','Y','Z'];

if(!empty($_POST['Idcard']) && (in_array(ucfirst(substr($_POST['Idcard'],0,1)),$Idname))==0){
    $_SESSION['err']='身分證字號第一個字必為英文字';
}

if(!empty($_SESSION['login_session'])){
    $Idcard=$pdo->query("select * from `login` where Idcard='{$_POST['Idcard']}' && pw='{$_POST['pw']}'")->fetch();
    $_SESSION['login_session'] =true;
    }
    header("location:temple.php");

?>

