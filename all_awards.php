<?php
include_once "base.php";

$period_str=[
    1=>'1,2月',
    2=>'3,4月',
    3=>'5,6月',
    4=>'7,8月',
    5=>'9,10月',
    6=>'11,12月'
];



if(isset($_GET['period']) || isset($_GET['year'])){
    setrawcookie("period",$_GET['period'],time()+3600);
    setrawcookie("year",$_GET['year'],time()+3600);
    $_GET['period']=$_COOKIE['period'];
    $_GET['year']=$_COOKIE['year'];
}

if(!isset($_GET['p'])){
    $page=1;
    $num=0;
    $rows=$pdo->query("select `invoices`.`date`,`invoices`.`number`,`invoices`.`period` from `invoices` where  period='{$_GET['period']}' && left(date,4)='{$_GET['year']}' order by date desc limit $num,10")->fetchAll();
}else if(isset($_GET['p'])){
    $page=$_GET['p'];
    $num=($page*10);
    $rows=$pdo->query("select `invoices`.`date`,`invoices`.`number`,`invoices`.`period` from `invoices` where  period='{$_GET['period']}' && left(date,4)='{$_GET['year']}' order by date desc limit $num,10")->fetchAll();
}

$count=$pdo->query("select count(*) from `invoices` where period='{$_GET['period']}' && left(date,4)='{$_GET['year']}' ")->fetchColumn();
$counts=([$count][0]);
$total=ceil($counts/10);

?>
<table class="table text-center">
    <tr>
        <td>消費日期</td>
        <td>發票號碼</td>
        <td>期數</td>
    </tr>
<?php

foreach($rows as $row){
    echo "<tr>";
    echo "<td>{$row['date']}</td>";
    echo "<td>{$row['number']}</td>";
    echo "<td>{$row['period']}</td>";
    echo "</tr>";
}
if($page<=1){
    $page=1;
}
if($page>=$total){
    $page=$total;
}

?>
</table>
  <ul class="pagination">
    <li class="page-item"><a class="page-link text-white bg-danger" href="?do=all_awards&year=<?=$_COOKIE['year']?>&period=<?=$_COOKIE['period']?>&p=<?=$page-1?>">Previous</a></li>
    <li class="page-item"><a class="page-link text-white bg-danger" href="?do=all_awards&year=<?=$_COOKIE['year']?>&period=<?=$_COOKIE['period']?>&p=<?=$page+1?>">Next</a></li>
  </ul>

