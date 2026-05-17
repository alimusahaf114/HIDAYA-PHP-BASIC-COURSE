<?php
session_start();
echo "My name is ".$_SESSION['username'];
session_destroy()
?>