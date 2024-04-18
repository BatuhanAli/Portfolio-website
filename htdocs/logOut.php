<?php
session_start();
session_destroy();
header('Location: LoginSite.php');
exit;
?>