<?php

print_r($_COOKIE);
session_start();
unset($_COOKIE['user_email']);
unset($_COOKIE['user_id']);
unset($_SESSION['user_id']);
unset($_SESSION['email']);
session_destroy();
setcookie('user_email', $_COOKIE["user_email"], time() - 31104000, '/'); //reset time to one year in the past
setcookie('user_id', $_COOKIE["user_id"], time() - 31104000, '/');



print_r ($_SERVER['SCRIPT_NAME']);
?>