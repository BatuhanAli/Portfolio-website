<?php
session_start();
if(!isset($_SESSION['active'])) {
    header("Location: LoginSite.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="reset.css" type="text/css">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <link rel="stylesheet" href="AddBlog.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
    <title>Batuhan Ozturk Portfolio</title>
    <script src="addBlog.js"></script>
  </head>

  <body>
    <div class="grid">

      <header class="header"> <!-- head of website-->
        <h1>Batuhan Ali Ozturk</h1>
      </header>

      <section class="links_flex">
        <nav id = links1>
          <ul class="links1" class="flexcontainer">
              <li class="links1"><a href="My_Portfolio.html">Home Page</a></li> <!-- contains home page, About Me and contact details -->
              <li class="links1"><a href="Education.html">Education and Skills</a></li>
              <li class="links1"><a href="Experience.html">Experience and Portfolio</a></li>
              <li class="links1"><a href="Blog.php">Blog</a></li>
              <li class="links1"><a href="LoginSite.php">Login</a></li>
              <li class="links1"><a href="AddBlogSite.php">Add Blog</a></li>
          </ul>
        </nav>
      </section>
    </div>

    <div id="ContentSpecial">
        <header>
            <h1 class="Header">Add Blog</h1>
        </header>

        <form id="blogForm" method="POST" action="addBlog.php">
            <fieldset>
                <legend> Add Blog </legend>

                <label for="title">Title</label><br>
                <input id="inputTitle" type="text" name="title" class="box" <?php include 'getTitle.php' ?>><br>

                <label for="date">Date</label><br>
                <input type="date" name="date" id="inputDate" class="box" <?php include 'getDate.php' ?>><br>

                <label for="time">Time</label><br>
                <input type="time" name="time" id="inputTime" class="box" <?php include 'getTime.php' ?>><br>

                <label for="content">Blog Content</label><br>
                <textarea type="text" name="content" id="inputBlog" class="box"><?php include 'getContent.php' ?></textarea><br>

                <label id="error"></label>

                <label for="button"></label>
                <button id="Submit" type="submit" name="Submit" value="Submit"> Submit </button>
                <button name="button" value="Preview" type="submit"> Preview </button>
                <button onclick="clearBlog()" type="button"> Clear Form </button>
            </fieldset>
        </form>
    </div>

  <div id="Content">

      <form id="logOutForm" method="POST" action="logOut.php">
          <fieldset id="fieldsetSpecial">
              <button id="logOut" type="submit" name="Submit" value="Submit"> Log Out </button>
          </fieldset>
      </form>
  </div>

    <script src="addBlog.js"></script>
    <footer> <!-- small footer for information -->
      <div class="footer">
          <p>Made by: Batuhan Ozturk</p>
          <p>Made on: 5/2/2024</p>
      </div>
    </footer>

  </body>
</html>