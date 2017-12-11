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
  

  if(!isset($_SESSION['login_user'])){
     header("location:login.php");
  }
  
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
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/17.2.3/css/dx.spa.css">
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/17.2.3/css/dx.common.css">
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/17.2.3/css/dx.light.css">

   
   
    

    <style>
        body {
            padding: 10px;
            margin: 0px;
        }

        .clear:before,
        .clear:after {
            content: "";
            display: table;
        }

        .clear:after {
            clear: both;
        }

        .clear {
            *zoom: 1;
        }

        .gauge {
            display: block;
            float: left;
            border: 1px solid #ddd;
            box-sizing: border-box;
            margin: 0 0 1% 0;
        }

        .size-1 {
            width: 20%;
        }

        .size-2 {
            width: 30%;
        }

        .size-3 {
            width: 48%;
        }

        .h-split {
            display: block;
            float: left;
            width: 1%;
            min-height: 100px;
        }
    </style>
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

#gauge-demo {
    width: 100%;
    text-align: center;
}

#gauge-demo > div {
    display: inline-block;
}

#circular-gauge-one,
#circular-gauge-two,
#circular-gauge-three {
    width: 33%;
}

#bar-gauge-one,
#bar-gauge-two {
    width: 49%;
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


    
   


  </body>


  <div class="container">
	<div class="row"style="padding-top: 50px;" >
	    
		<div class="main-header">Analysis Result <span class="destaque"></span></div>
	</div>

  <div class="col-md-12">
	    
	    <div class="panel panel-info"> 
          <div class="panel-heading"> Overall Recommendation
          
            <div class="row">
            
            <div class="col-md-12 text-center" style="font-size:200%">
              
              <?php 
              $query = "SELECT * FROM decision order by recomend_id desc limit 1"; 
              $rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
              // while ($row = pg_fetch_row($rs)) { 
              //   echo "$row[0] \n"; 
              // }
              $row = pg_fetch_row($rs);
              $msg = $row[0];
              echo $msg;
              ?>
              
            </div>
            
            </div>
          </div>
        </div>
  </div>      
	




      <div class="col-md-12"> <h1> Real-time Price</h1>
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

                <div class="container-fluid">
                  <div class="row">

                      <!-- <div class="col-xs-6">        
                              <div id="gauge" class="200x160px"></div>
                                <script>
                                  var g = new JustGage({
                                    id: "gauge",
                                    value: 40,
                                    min: 0,
                                    max: 100,
                                    title: "Sentiment Meter"
                                  });
                                </script>
                      </div>
                 

                  <div class="col-xs-6">      
                          <div id="gauge" class="200x160px"></div>
                            <script>
                              var g = new JustGage({
                                id: "gauge",
                                value: 67,
                                min: 0,
                                max: 100,
                                title: "Technical Meter"
                              });
                            </script>
                  </div> -->
                  <div id="jg1" class="gauge size-1"></div>
    <div class="h-split"></div>
    <div id="jg2" class="gauge size-2"></div>
    <div class="h-split"></div>
    <div id="jg3" class="gauge size-3"></div>
    <div class="clear"></div>
    <div id="jg4" class="gauge size-1"></div>
    <div class="h-split"></div>
    <div id="jg5" class="gauge size-2"></div>
    <div class="h-split"></div>
    <div id="jg6" class="gauge size-3"></div>
    <script src="js/raphael-2.1.4.min.js"></script>
    <script src="js/justgage.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var jg1, jg2, jg3, jg4, jg5, jg6;

        var defs1 = {
            label: "label",
            value: 65,
            min: 0,
            max: 100,
            decimals: 0,
            gaugeWidthScale: 0.6,
            pointer: true,
            pointerOptions: {
                toplength: 10,
                bottomlength: 10,
                bottomwidth: 2
            },
            counter: true,
            relativeGaugeSize: true
        }

        var defs2 = {
            label: "label",
            value: 35,
            min: 0,
            max: 100,
            decimals: 0,
            gaugeWidthScale: 0.6,
            pointer: true,
            pointerOptions: {
                toplength: 5,
                bottomlength: 15,
                bottomwidth: 2
            },
            counter: true,
            donut: true,
            relativeGaugeSize: true
        }

        jg1 = new JustGage({
            id: "jg1",
            defaults: defs1
        });

        jg2 = new JustGage({
            id: "jg2",
            defaults: defs1
        });

        jg3 = new JustGage({
            id: "jg3",
            defaults: defs1
        });

        jg4 = new JustGage({
            id: "jg4",
            defaults: defs2
        });

        jg5 = new JustGage({
            id: "jg5",
            defaults: defs2
        });

        jg6 = new JustGage({
            id: "jg6",
            defaults: defs2
        });
    });
    </script>
    <script src="js/justgage.js"></script>
    <script src="https://js.devexpress.com/Demos/WidgetsGallery/JSDemos/js/jquery-3.1.0.min.js"></script>
    <script src="https://cdn3.devexpress.com/jslib/17.2.3/js/dx.all.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  

</html>