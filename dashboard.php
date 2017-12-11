<?php 
  $conn_string = "host=127.0.0.1 port=5432 dbname=postgres user=postgres password=fexper";
  $dbconn = pg_connect($conn_string);
  //connect to a database named "postgres" on the host "postgres" with a username and password
  $conn = $dbconn;
  
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

    <title>FexperRemake - Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    
    <script src="js/ie-emulation-modes-warning.js"></script>

    <link rel="icon" href="image/favicon-16x16.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/dashboard.js"></script>
		<script src="js/gauge.js"></script>


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
		  <div id="navbar" class="collapse navbar-collapse">
			
		  </div><!--/.nav-collapse -->
		  </div>
	  </nav>

</body>

<div class="container">
	<div class="row">
	    
		<div class="main-header">Analysis Result <span class="destaque"></span></div>
	</div>
	
	
	
	<div class="col-md-3">
	    
	    <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-list-ol fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">4</p>
                <p class="announcement-text">Customers</p>
              </div>
            </div>
          </div>
          <a href="">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>
	
	
	

	<div class="col-md-3">
	    
	    <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-usd fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"> R$ 950 mil</p>
                <p class="announcement-text">Revenue</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>	
	
	

	<div class="col-md-3">
	    
	    <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-line-chart fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"> 2,3 months</p>
                <p class="announcement-text">Average time</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>		
	
	


	<div class="col-md-3">
	    
	    <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-money fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"> $ 250 k</p>
                <p class="announcement-text">Recovered <i class=""></i>  </p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>			
	
	
	
	
	<div class="col-md-6">
	    
	    <h3>Main customers</h3>
	    
	    <table class="table table-condensed table-bordered table-hover small">
	        <thead>
	           <tr>
	               <th style="width:80px;">.</th>
	               <th>Name</th>
	               <th>Revenue</th>
	               <th>Tax</th>
	               <th>Cap</th>
	               <th>ROI</th>	               
	               <th>Interest</th>
	           </tr>
	        </thead>
	        <tbody>
	            
	            <tr>
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-dashboard"></i></a>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i></a>
	                    <a href="#"> <i class="glyphicon glyphicon-warning-sign"></i></a>
	                </td>
	                <td>
	                    Company 1
	                </td>
	                <td>
	                    $ 350 k
	                </td>
	                <td>
	                    4 
	                </td>
	                <td>
	                    $ 291,75
	                </td>
	                <td>3,72</td>
	                <td>
	                    3,65%
	                </td>
	                
	            </tr>
	            
	            <tr class="danger">
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-dashboard"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-warning-sign"></i></a>
	                </td>
	                
	                <td>
	                    Customer 2
	                </td>
	                <td>$ 270 k</td>
	                <td>7,8 </td>
	                <td>$ 1307.32</td>
	                <td>2,61</td>	                
	                <td>8,45%</td>
	            </tr>

	            <tr class="info">
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-dashboard"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-warning-sign"></i></a>
	                </td>
	                
	                <td>
	                    Customer 3
	                </td>
	                <td>$ 125 k</td>
	                <td>2,5 </td>
	                <td>$ 312.45</td>
	                <td>9,21</td>	                
	                <td>2,5%</td>
	            </tr>

	            <tr >
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-dashboard"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i> </a>
	                    <a href="#"> <i class="glyphicon glyphicon-warning-sign"></i></a>
	                </td>
	                
	                <td>
	                    Customer 4
	                </td>
	                <td>$ 205 k</td>
	                <td>7,1 </td>
	                <td>$ 115,75</td>
	                <td>6,27</td>
	                <td>(n/d)</td>
	            </tr>

	            
	        </tbody>
	        
	    </table>
	    
    </div>
	
	<div class="col-md-6">
	    <div id='grafico1' class="grafico"></div>
	</div>
	
	<div class="col-md-6">
	    <div id='grafico2' class="grafico"></div>
	</div>
	<div class="col-md-6">
	    <div id='grafico3' class="grafico"></div>
	</div>

	
	
	
		<div class="col-md-8">
	    
	    <h3>Messages</h3>
	    
	    <table class="table table-condensed table-bordered table-hover small">
	        <thead>
	           <tr>
	               <th style="width:30px;">.</th>
	               <th>From</th>
	               <th>Subject</th>
	               <th>Actions</th>
	           </tr>
	        </thead>
	        <tbody>
	            
	          
	            
	            
	            <tr class="text-info">
	                <td>
	                   <i class="glyphicon glyphicon-info-sign"></i>
	                </td>
	                <td>
	                   Probability of Buy
	                </td>
	                <td>
					   {{positive}}
	                </td>
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i></a>
	                    <a href="#"> <i class="glyphicon glyphicon-arrow-right"></i> </a>
	                </td>

	            </tr>
	            

	            <tr class="text-info">
	                <td>
	                   <i class="glyphicon glyphicon-user"></i>
	                </td>
	                <td>
	                    Probability of Sell
	                </td>
	                <td>
	                    {{negative}}
	                </td>
	                <td>
	                    <a href="#"> <i class="glyphicon glyphicon-eye-open"></i></a>
	                    <a href="#"> <i class="glyphicon glyphicon-arrow-right"></i> </a>
	                </td>

	            </tr>
	            

	            
	        </tbody>
	        
	    </table>
	    
	</div>
	
	
		<div class="col-md-6">
	    <div id='grafico4' class="grafico" style="height: 400px;"></div>
	</div>

	
</div>
</html>