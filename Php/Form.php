
<?php

$reg=$_GET['Comments'];
$arr=explode('',$reg);
echo "Your regard was: ". "<br>";
foreach($arr as $words){
    echo $words. ",";
}


$reg=implode('', $arr);
echo "Your regard was : $reg";

$str = "Thank you for your regard!";
echo $str . "<br>";
echo trim($str,"Thd!");
?>
