<?php

session_start();
$_SESSION['user']['level'] == "admin";
$_SESSION['user']['level'] == "user";
unset($_SESSION['user']['level']);
session_unset();
session_destroy();
header("location:../")

?>