<?php
include_once "base.php";
ini_set('display_errors','off'); 
$period=ceil(date("m")/2);

// $sql="select * from `invoices` where period='$period' order by date desc";

// $rows=$pdo->query($sql)->fetchAll();

// $m=ceil(date("m")/2);
// if(isset($_GET['pd'])){
//     $year=date('Y');
//     $period=$m;
//     $sql="select * from `invoices` where period='$period' order by date desc";
// }else{
//     $get_news=$pdo->query("SELECT * FROM `award_numbers` order by year desc ,period desc limit 1")->fetch();
//     $year=$get_news['year'];
//     $period=$get_news['period'];
//     }
//     if(isset($_GET['pd1'])){
//         $year=date('Y');
//         $period=$m-1;
//         $sql="select * from `invoices` where period='$period' order by date desc";
//         $rows=$pdo->query($sql)->fetchAll();
//     }
//     if(isset($_GET['pd2'])){
//         $year=date('Y');
//         $period=$m-2;
//         $sql="select * from `invoices` where period='$period' order by date desc";
//         $rows=$pdo->query($sql)->fetchAll();
//     }
?>

<?php

$keyword=$_POST['keyword'];
$ivname=$_POST['ivname'];
// $count=ceil(COUNT($rows)/5);
if(((!empty($_POST['ivname']) && !empty($_POST['keyword'])) && empty($_GET['page']))){
    $sql="SELECT * FROM `invoices` WHERE `code` LIKE '%{$ivname}%' && `number` LIKE '%{$keyword}%' ";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}


?>
<h5 style="color:#804040;">搜尋發票：</h5>
<form action="?do=invoice_list" method="post">
<input type="text" name="ivname"  pattern="[A-Z]{2}$"><input type="text" name="keyword" pattern="[1-9]{8}$"><input type="submit" value="搜尋" name="submit" >
</form>

<table class="table text-center">

    <?php
    foreach($rows as $row){
    ?>
        <tr>
        <td style="color:#804040;">發票號碼</td>
        <td style="color:#804040;">消費日期</td>
        <td style="color:#804040;">消費金額</td>
        <td style="color:#804040;">操作</td>
    </tr>
    <tr>
        <td><?=$row['code'].$row['number'];?></td>
        <td><?=$row['date'];?></td>
        <td><?=$row['payment'];?></td>
        <td>
            <button class="btn btn-sm btn-primary">
                <a class="text-light" href="?do=edit_invoice&id=<?=$row['id'];?>">編輯</a>
            </button>
            <button class="btn btn-sm btn-danger">
            <a class="text-light" href="?do=del_invoice&id=<?=$row['id'];?>">刪除</a>
            </button>
            <button class="btn btn-sm btn-success">
            <a class="text-light" href="?do=award&id=<?=$row['id'];?>">對獎</a>
            </button>
        </td>
    </tr>
    <?php
           }
    ?>
</table>
