<?php 
  include("db.php");
  session_start();
  echo $_SESSION['username'];
  echo $_SESSION['user_id'];

  $user_check = $_SESSION['user_id'];

  echo $user_check;
  
  $ses_sql = pg_query($db,"select user_id from users where user_id = '$user_check' ");
  
  $row = pg_fetch_array($ses_sql,pg_fetch_assoc);
  
  $login_session = $row['username'];
  

  // if(!isset($_SESSION['user_id'])){
  //    header("location:login.php");
  // }
  
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

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="js/dashboard.js"></script>
  </head>

  <style>
.grafico {
	min-width: 310px;
	max-width: 400px;
	height: 280px;
	margin: 0 auto
}

.main-header {
    font-size: x-large;
    color : #888;
    font-family: Verdana;
    margin-bottom: 20px;
}

.destaque {
    color: #f88;
    font-weight: bolder;
}

.highcharts-tooltip h3 {
    margin: 0.3em 0;
}
</style>



 

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
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>



  </body>


  <div class="container">
	<div class="row"style="padding-top: 50px;" >
	    
		<div class="main-header">Analysis Result <span class="destaque"></span></div>
	</div>

  <div class="col-md-12">
	    
	    <div class="panel panel-info">
          <div class="panel-heading"> 
          
            <div class="row">
            
            <div class="col-md-6 text-center" style="font-size:200%">
              
              <?php 
              $query = "SELECT * FROM decision order by recomend_id desc limit 1"; 
              $rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
              while ($row = pg_fetch_row($rs)) { 
                echo "$row[0] \n"; 
              }
              ?>
              
            </div>
            
            </div>
          </div>
        </div>
        
	</div>




  <div class="col-md-12">
  <!-- TradingView Widget BEGIN -->
<div style="height: 440px; margin-bottom: 36px;">
<script type="text/javascript" src="https://s3.amazonaws.com/tradingview/tv.js"></script>
<script type="text/javascript">
new TradingView.widget({
"width": 1140,
"autosize": true,
"symbol": 'FX_IDC:EURUSD',
"locale": "en",
"interval": "D",
"timezone": "exchange",
"theme": "White",
"toolbar_bg": "#f4f7f9",
"hide_side_toolbar": false,
"allow_symbol_change": true,
"hideideas": true,
"show_popup_button": true,
"popup_width": "1000",
"popup_height": "650",
"save_image": true,
"logo": {
"src": "dailyfx",
"bottom": "50px",
"left": "20px",
"width": "100px",
"height": "30px"
}
});
</script>
<br><br>
<!-- TradingView Widget END --> </div>

</html>