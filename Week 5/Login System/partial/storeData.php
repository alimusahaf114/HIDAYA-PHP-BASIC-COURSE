<?php
session_start();
$_SESSION['username'] = $_POST['username']
if($_POST['username'] )
$_SESSION['password'] = $_POST['username']
echo "<pre>";
print_r($_POST);
echo "</pre>";

?>