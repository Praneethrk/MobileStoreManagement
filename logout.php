<?php
session_start();
    //check to see whether the user is logged in or not


session_unset();
session_destroy();
header("location:home.html");
exit();

?>
