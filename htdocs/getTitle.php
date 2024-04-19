<?php
session_start();
echo 'value="' . $_SESSION['title'] . '"';
$_SESSION['title'] = "";
?>