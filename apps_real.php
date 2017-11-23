<?php 
  $conn_string = "host=127.0.0.1 port=5432 dbname=postgres user=postgres password=fexper";
  $dbconn = pg_connect($conn_string);
  //connect to a database named "postgres" on the host "postgres" with a username and password
  $conn = $dbconn;
  
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/favicon-16x16.png">

    <title>FexperRemake - Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
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
          <a class="navbar-brand">Fexper - Dashboard</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          
        </div><!--/.nav-collapse -->
        </div>
    </nav>


    <div class="card">
      <div class="container">
      <h1>Recommendation</h1>
        <div style="font-size:200%;">
          <?php 
            $query = "SELECT * FROM decision order by recomend_id desc limit 1"; 
            $rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
            while ($row = pg_fetch_row($rs)) { 
              echo "$row[0] \n"; 
            }
          ?>
        </div>
      </div>
    </div>


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