<?php
session_start();
echo 'value="' . $_SESSION['timeIn'] . '"';
$_SESSION['timeIn'] = "";
?>