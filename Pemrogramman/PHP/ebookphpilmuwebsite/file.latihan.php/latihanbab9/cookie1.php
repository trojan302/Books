<?php
$isicookie = "ini adalah isi dari cookie";
setcookie("cookie1", $isicookie, time()+3600);
echo $_COOKIE["cookie1"];
?>