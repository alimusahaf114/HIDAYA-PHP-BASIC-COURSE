<?php
session_start();
$_SESSION['username'] = "Musahaf";
echo "We have saved your session ";
session_destroy();
// echo "Hello world";
?>