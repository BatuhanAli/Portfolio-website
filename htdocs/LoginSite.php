<?php
  session_start();
  if(isset($_SESSION['active'])) {
      header("Location: addBlogSite.php"); 
      exit();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="reset.css" type="text/css">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <link rel="stylesheet" href="Login.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
    <title>Batuhan Ozturk Portfolio</title>
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
          </ul>
        </nav>
      </section>
    </div>

    <div id="Content">
        <header>
            <h1 class="Header">Login Form</h1>
        </header>

        <form method="POST" action="login.php">
            <fieldset>
                <legend> Login </legend>
                
                <label for="email">Email Address</label><br>
                <input type="email" name="email" id="input" class="box"><br>
                
                <label for="password">Password</label><br>
                <input type="password" name="password" id="input" class="box"><br>
                

                <label id="error"></label>

                <button class="box" type="submit" value="Submit">Submit</button>
            </fieldset>
        </form>
    </div>

    <script src="login.js"></script>
    <footer> <!-- small footer for information -->
      <div class="footer">
          <p>Made by: Batuhan Ozturk</p>
          <p>Made on: 5/2/2024</p>
      </div>
    </footer>

  </body>
</html>