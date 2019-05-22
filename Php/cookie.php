<?php
$cookie_name = "user";
$cookie_value = "Name";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo"<p hidden>Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name]."</p>";
}


setcookie("cookie[one]","cookieone");
setcookie("cookie[two]","cookietwo");
setcookie("cookie[three]","cookiethree");

if(isset($_COOKIE['cookie'])){
    foreach($_COOKIE['cookie'] as $name=>$value){
        $name=htmlspecialchars($name);
        $value=htmlspecialchars($value);
        echo" <p hidden>name: $value <br> \n</p>";
    }
}

setcookie("cookie[two]","",time() - 3600);
?>