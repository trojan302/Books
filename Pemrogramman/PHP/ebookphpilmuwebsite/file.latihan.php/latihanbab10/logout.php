<?php
require_once("function.php");
session_unset($_SESSION['login']);
session_destroy();
header("location: login.php");
?>