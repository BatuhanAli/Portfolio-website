<?php
session_start();
echo 'value="' . $_SESSION['dateIn'] . '"';
$_SESSION['dateIn'] = "";
?>