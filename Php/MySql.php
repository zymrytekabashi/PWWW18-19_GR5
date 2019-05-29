<?php
$dbhosti = 'localhost:3306';
$dbuseri = 'root';
$dbpasswordi = '12345';
$con = mysqli_connect($dbhosti,$dbuseri, $dbpasswordi);
if(!$con){
    die('Lidhja nuk mund te realizohet'. mysqli_connect_error());
}
echo 'Lidhja me db perfundoi me sukses';
$sql = 'CREATE Database register';
$retval = mysqli_query($con, $sql);
if(!$retval){
    die('Lidhja nuk mund te realizohet'. mysqli_connect_error());
}
mysqli_close($con);
?>