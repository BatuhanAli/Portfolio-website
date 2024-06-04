<?php
session_start();
// echos out the preview of the blog that the user is editing 
echo '<div id="blogOutline">';
echo '  <header class="blogHeader">';
echo $_SESSION['title'] . "<br>";
echo "  </header>";
echo '<div id="blogDate">';
echo date('jS F Y, H:i', strtotime($_SESSION['dateIn'] . ' ' . $_SESSION['timeIn'])) . " BST <br>";
echo "</div>";
echo '<div id="blogContent">';
echo $_SESSION['content'] . "<br><br>";
echo "</div>";
echo "<hr>";
echo "</div>";
?>