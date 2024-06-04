<?php
// This just sets the value of a field to the one stored in the session this is used for the preview feature
session_start();
echo 'value="' . $_SESSION['title'] . '"';
$_SESSION['title'] = "";
?>