<?php
$username = $_POST['email'];
$password = $_POST['password'];
    
$db_username = "hi@hi";
$db_password = "hi";

if (($username == $db_username) && ($password == $db_password)) {
    header("Location: AddBlog.html");
    exit;
} 
else {
    header("Location: Login.html?error=incorrectCredentials");
    exit;
}
?>
