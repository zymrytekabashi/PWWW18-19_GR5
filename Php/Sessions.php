<?php
session_start();
if(!isset($_SESSION['count']))
{
$_SESSION['count']=0;


}

else {
    $_SESSION['count']+=1;
}
if($_SESSION['count']>20){
    $_SESSION['count']+=2;

}
$message="You have visited this page  ". $_SESSION['count'] ;
$message .= " times in this session ";

?>