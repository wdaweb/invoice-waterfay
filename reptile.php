<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>爬蟲程式</title>
</head>
<body>
<table>
<tbody>
    <?php
    $url="https://invoice.etax.nat.gov.tw/";
    $html=file_get_contents($url);
    // echo $html;
    $dom=new DOMdocument();
    @$dom->loadHTML($html);
    $dom->preserveWhiteSpace=false;
    // $dom->normalizeDocument();
    $tables=$dom->getElementsByTagName('table');
    $count=0;
    foreach($tables as $table){
        $tds=$table->getElementsByTagName('td');
        $i=0;
    foreach($tds as $td){
        $i++;
        $count++;
        switch($i){
            case 1:
                echo "<tr>";
                echo "<td>" . $td->nodeValue . "</td>";
            break;
            case 2:
                echo "<td>" . $td->nodeValue . "</td>";
                echo "</tr>";
            break;
            default:break;
        }
        if($i%1==0){
            $i=0;
            $count++;
        }
    }
    if($count==20){
        break;
    }
    }
    
    ?>
    </tbody>
</table>
</body>
</html>