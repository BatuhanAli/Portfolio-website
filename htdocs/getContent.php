<?php
session_start();
echo $_SESSION['content'];
$_SESSION['content'] = "";
?>