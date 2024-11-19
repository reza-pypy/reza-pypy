<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body{
         direction: rtl;
        }

    </style>
</head>
<body>
<?php
$s[0]="تهران";
$s[1]="مشهد";
$s[2]="اصفهان";
$s[3]="مازندران";
$s[4]="تبریز";
$s[5]="نجف آباد";
$s[6]="رشت";
$s[7]="زنجان";
$s[8]="سیستان وبلوچستان";
$s[9]="اذربایجان";
$s[10]="اسراییل";


?>
 <select name="" id="q">
    <?php
    for ($i=0;$i<=count($s);$i++)
    echo("<option>".$s[$i]."</option>");
           
    ?>
 </select>
    
    
</body>
</html>