
<?php

$reg=$_GET['Comments'];
$arr=explode(' ',$reg);
echo "<br>Your regard was: ";
$lengthi = "";
foreach($arr as $words){
    echo $words. ",";
    $lengthi = $lengthi . $words ;
}
echo "You have written ".strlen("$lengthi")." letters<br>";

$reg=implode('', $arr);
echo "<br>Your regard was : $reg<br>";
$str = "Thank you for your regard!" ."<br>";
echo $str . "<br>";
echo trim($str,"Thd!") . "<br>";

$number = 500;
$str = "ModernSchool" ;
printf("There are %u students in %s ",$number,$str)."<br>";
echo "<br>";
echo substr("Apply now!",6)."<br>";


$arr = array("blue","red","green","yellow");
print_r(str_replace("red","pink",$arr,$i));
echo "<br>" . "Replacements: $i" ." <br>";
?>
