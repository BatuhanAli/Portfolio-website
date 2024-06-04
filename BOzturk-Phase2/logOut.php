<?php
// destroys the session so user can log out
session_start();
session_destroy();
header('Location: LoginSite.php');
exit;
?>