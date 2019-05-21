<html>
    <head>
        <title>After submitting</title>
        
    </head>
    <body>
<?php
if(isset($_REQUEST["name"])){
    echo "<p>Thank you for trusting us, " . $_REQUEST["Parent"]."</p>";
} 
$userName= isset($_POST['Parent']) ? $_POST['Parent'] : '';
$emailAddress=$_POST['email'];

echo $userName;
?>
        
        </body>
</html>