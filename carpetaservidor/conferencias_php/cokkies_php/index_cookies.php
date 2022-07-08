<?php  
/*$value = 'something from somewhere';

setcookie("TestCookie", $value);
setcookie("TestCookie2", $value, time()+3600);
setcookie("TestCookie3", $value, time()+60);


?>
<?php
echo $_COOKIE["TestCookie"];
echo $_COOKIE["TestCookie2"];
echo $_COOKIE["TestCookie3"];
*/
?>
<?php
// set the cookies
setcookie("cookie[three]", "cookiethree");
setcookie("cookie[two]", "cookietwo");
setcookie("cookie[one]", "cookieone");

// después de que la página se recargue, imprime
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}
?>
