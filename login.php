<?php
    session_start();

    if(isset($_POST['login'])){
        include_once("db.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = pg_prepare($db, $username);
        $password = pg_prepare($db, $password);

        $sql = "SELECT * FROM users WHERE username=$username";
        $query = pg_query($db, $sql);
        $row = pg_fetch_array($query);

        $id = $row['user_id'];
        $db_password = $row['password'];

        if($password == $db_password){
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $id;
            header("Location: apps_real.php");
        } 
        else{
            echo "You didn't enter the correct details!";
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/favicon-16x16.png">

    <title>Fexper - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link href="css/custom.css" rel="stylesheet">
  
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

    <style>
    input {font:small-caption;font-size:16px;}
    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/FexperRemake/index.php">Fexper</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/FexperRemake/index.php">Home</a></li>
            <li><a href="/FexperRemake/about.html">About</a></li>
            <li><a href="/FexperRemake/contact.html">Contact</a></li>
            <li ><a href="/FexperRemake/login.php">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    
  <h1 style="font-family: Tahoma;">Login</h1>
    <form action="login.php" method="post" enctype="multipart/form-data">
    <input placeholder="Username" name="username" type="text" autofocus>
    <input placeholder="Password" name="password" type="password">
    <input name="login" type="submit" value="login">
    </form>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>