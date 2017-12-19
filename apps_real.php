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
      
      <script src="js/raphael-2.1.4.min.js"></script>
      <script src="js/justgage.js"></script>

      <link crossorigin="" href="https://bpcdn.co" rel="preconnect">
      <link rel="stylesheet" media="all" href="https://bpcdn.co/assets/stylesheets/application-8f9d823189.css">
      <script id="omapi-script" src="//a.optnmstr.com/app/js/api.min.js" async=""></script><script type="text/javascript" async="" src="https://static.getclicky.com/js"></script><script type="text/javascript" async="" src="https://in.getclicky.com/in.php?site_id=31313&amp;res=1600x900&amp;lang=en&amp;secure=1&amp;type=pageview&amp;href=%2Ftools%2Fposition-size-calculator&amp;title=Position%20Size%20Calculator%20-%20BabyPips.com&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;jsuid=30657620&amp;mime=js&amp;x=0.884735281315109"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C800" media="all">
      <script src="//ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js" async=""></script><script async="true" type="text/javascript" src="https://s.adroll.com/j/roundtrip.js"></script><script type="text/javascript" async="" src="https://in.getclicky.com/in.php?site_id=31313&amp;type=ping&amp;jsuid=30657620&amp;mime=js&amp;x=0.10750357629932616"></script><script type="text/javascript" async="" src="https://in.getclicky.com/in.php?site_id=31313&amp;type=ping&amp;jsuid=30657620&amp;mime=js&amp;x=0.6208970776152589"></script><script type="text/javascript" async="" src="https://in.getclicky.com/in.php?site_id=31313&amp;type=ping&amp;jsuid=30657620&amp;mime=js&amp;x=0.8473207749010472"></script>
      <!-- <script type="text/javascript" src="https://bam.nr-data.net/1/4609bcac3a?a=40062352&amp;v=1071.385e752&amp;to=cwwIFRcJVAlQFB5WU1wAEw0EElcXRklSVF5TFgoAEQlKFhoWXkZbRAoJDzoVUR9Q&amp;rst=3558&amp;ref=https://www.babypips.com/tools/position-size-calculator&amp;qt=1&amp;ap=61&amp;be=1008&amp;fe=3252&amp;dc=1898&amp;perf=%7B%22timing%22:%7B%22of%22:1513094421317,%22n%22:0,%22f%22:4,%22dn%22:6,%22dne%22:111,%22c%22:111,%22s%22:122,%22ce%22:252,%22rq%22:252,%22rp%22:964,%22rpe%22:971,%22dl%22:977,%22di%22:1896,%22ds%22:1896,%22de%22:1899,%22dc%22:3252,%22l%22:3252,%22le%22:3255%7D,%22navigation%22:%7B%7D%7D&amp;jsonp=NREUM.setToken"></script><script src="https://js-agent.newrelic.com/nr-1071.min.js"></script><script id="dfp" src="https://www.googletagservices.com/tag/js/gpt.js" async="" type="text/javascript" data-timestamp="Wed Dec 13 2017 00:00:23 GMT+0800 (+08)"></script><script id="ga" src="https://www.google-analytics.com/analytics.js" async="" type="text/javascript" data-timestamp="Wed Dec 13 2017 00:00:23 GMT+0800 (+08)"></script><script src="https://asset.pagefair.net/ads.min.js"></script><script src="https://asset.pagefair.com/measure.min.js"></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" src="https://www.adblockanalytics.com/analyze.js"></script><script type="text/javascript" src="https://www.adblockanalytics.com/ads.js"></script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"4609bcac3a","applicationID":"40062352","transactionName":"cwwIFRcJVAlQFB5WU1wAEw0EElcXRklSVF5TFgoAEQlKFhoWXkZbRAoJDzoVUR9Q","queueTime":1,"applicationTime":61,"agent":""}</script> -->
      <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[f.now()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,t){s[t]=o(d+t,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(l+"tracer",[f.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return t.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],n),e}finally{c.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=o(l+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,f.now()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],4:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o,i){if(!d.aborted||i){e&&e(n,r,o);for(var a=t(o),u=m(n),c=u.length,f=0;f<c;f++)u[f].apply(a,r);var p=s[y[n]];return p&&p.push([b,n,r,a]),a}}function l(e,t){v[e]=m(e).concat(t)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(n)}function g(e,t){f(e,function(e,n){t=t||"feature",y[n]=t,t in s||(s[t]=[])})}var v={},y={},b={on:l,emit:n,get:w,listeners:m,context:t,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},p={},d=t.exports=o();d.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=h.info=NREUM.info,t=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return s.abort();f(y,function(t,n){e[t]||(e[t]=n)}),c("mark",["onload",a()+h.offset],null,"api");var n=d.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),c=e("handle"),f=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=t.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
      <script src="http://code.jquery.com/jquery-1.4.4.js"></script>
      <style type="text/css">
      #content-box {
        box-sizing: content-box;
        height: 60%;
        width: 100%;
        /* border: 1px solid grey; */
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;

        background-image: url('image/flatgraph.png');
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }

      #content-box2 {
        box-sizing: content-box;
        height: 60%;
        width: 100%;
        /* border: 1px solid grey; */
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;

        /* background-image: url('image/flatgraph.png'); */
        background-color: coral;
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }

      .topright {
      position: absolute;
      top: 70px;
      left: 200px;
      color: white;
      font-size: 26px;
      }

      .bottomright {
      position: absolute;
      bottom: 80px;
      right: 200px;
      font-size: 26px;
      color: white;
      }
      .updatesnr {
      position: absolute;
      bottom: 15px;
      right: 95px;
      font-size: 18px;
      color: white;
      }
      body {
      text-align: center;
      }
      
      </style>   
   </head>

   <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                  aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand">Fexper - Dashboard</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
               <li>
                  <a href="logout.php">
                  <span class="glyphicon glyphicon-log-in"></span> Logout</a>
               </li>
            </ul>
         </div>
      </nav>
   </body>
   <div class="container">
   <div class="row" style="padding-top: 50px;">
      <!-- <div class="main-header">Analysis Result
         <span class="destaque"></span>
      </div> -->
      <h1 class="title">Analysis Result</h1>
   </div>
   <!-- 1st row -->
   <div class="row">
      <div class="col-md-12">
         <div class="panel panel-info">
            <div class="panel-heading">
               <h3>Overall Recommendation</h3>
               <div class="row">
                  <div class="col-md-12 text-center" style="font-size:200%">
                    <span>
                        <?php 
                        $query = "SELECT * FROM decision order by recomend_id desc limit 1"; 
                        $rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
                        // while ($row = pg_fetch_row($rs)) { 
                        //   echo "$row[0] \n"; 
                        // }
                        $row = pg_fetch_row($rs);
                        $msg = $row[0];
                        echo $msg;
                        $msgtime = " Last update " .$row[1];
                        ?>
                    </span>
                  </div>
                  <div class="col-sm-12">
                  <span style="font-size: 80%; font-weight:normal"> <?php echo $msgtime; ?></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-sm-12">
   <div class="divider"></div>
   </div>


   <!-- 2nd row -->
   
   <div class="row">
     
      <div class="col-md-6">
         <div id="g1" ></div>
         <script>
            var g = new JustGage({
              id: "g1",
              value: 67,
              min: 0,
              max: 100,
              title: "Fundamental Analysis"
            });
         </script>
      </div>
     
      
      <div class="col-md-6">
         <div id="g2" ></div>
         <script>
            var g = new JustGage({
              id: "g2",
              value: 45,
              min: 0,
              max: 100,
              title: "Technical Analysis"
            });
         </script>   
      </div>
      <!-- </div> -->
      <div class="col-sm-12">
      <div class="divider"></div>
      </div>

      <div class="col-md-12">
      <div id="container">
        <div id="result"></div>
        <ul id="user"></ul>
      </div>
     
      <script>
          $(document).ready(function(){
              // $('#result').load('test.html', function(
              //     responseTxt, statusTxt, xhr){
              //       if(statusTxt == "success"){
              //           alert("It went fine");
              //       } else if(statusTxt == "error"){
              //           alert("Error: "+xhr.statusText);
              //       }
              //     });
              $.get('test.html', function(data){
                  $('#result').html(data);
              });
              $.getJSON('users.json', function(data){
                  $each(data, function(i user){

                  });
              });
          });
      </script>
       </div>



      <!-- 3rd row -->
      <div class="row">
         <div>
      <!-- <section class="page-index-header calculator-header"> -->
         <h2 class="title">Position Size Calculator</h2>    
      <!-- </section> -->
      <section class="calculator">
         <div data-react-class="PositionSizeCalculator" data-react-props="{}">
            <div data-reactroot="" class="calculator-two-column calculator-position-size">
               <div class="columns">
                  <section class="fields">
                     <div class="calculator-field account-currency">
                        <label>Account Currency</label>
                        <div class="select-picker select-picker-dark">
                           <button class="selector" type="button">
                              <div class="selector-value">USD</div>
                              <select>
                                 <option value="&quot;USD&quot;">USD</option>
                                 <option value="&quot;EUR&quot;">EUR</option>
                                 <option value="&quot;JPY&quot;">JPY</option>
                                 <option value="&quot;GBP&quot;">GBP</option>
                                 <option value="&quot;CHF&quot;">CHF</option>
                                 <option value="&quot;AUD&quot;">AUD</option>
                                 <option value="&quot;CAD&quot;">CAD</option>
                                 <option value="&quot;NZD&quot;">NZD</option>
                              </select>
                           </button>
                        </div>
                     </div>
                     <div class="calculator-field">
                        <label for="balance">Account Balance</label>
                        <div class="input">
                           <button class="clear" tabindex="-1">Clear</button>
                           <div class="number-input"><input type="number" step="any" id="balance" name="balance" value="335" placeholder="0" style="color: transparent;"><span class="value">335</span></div>
                        </div>
                     </div>
                     <div class="calculator-field">
                        <label for="risk">Risk Percentage</label>
                        <div class="input">
                           <button class="clear" tabindex="-1">Clear</button>
                           <div class="number-input"><input type="number" step="any" id="risk" name="risk" value="15" placeholder="0" style="color: transparent;"><span class="value">15%</span></div>
                        </div>
                     </div>
                     <div class="calculator-field">
                        <label for="stop-loss">Stop Loss (pips)</label>
                        <div class="input">
                           <button class="clear" tabindex="-1">Clear</button>
                           <div class="number-input"><input type="number" step="1" id="stop-loss" name="stop-loss" value="20" placeholder="0" style="color: transparent;"><span class="value">20</span></div>
                        </div>
                     </div>
                     <div class="calculator-field currency-pair">
                        <label>Currency Pair</label>
                        <div class="select-picker select-picker-dark">
                           <button class="selector" type="button">
                              <div class="selector-value">EUR/USD</div>
                              <select>
                                 <option value="&quot;EUR/USD&quot;">EUR/USD</option>
                                 <option value="&quot;GBP/USD&quot;">GBP/USD</option>
                                 <option value="&quot;USD/CHF&quot;">USD/CHF</option>
                                 <option value="&quot;USD/CAD&quot;">USD/CAD</option>
                                 <option value="&quot;USD/JPY&quot;">USD/JPY</option>
                                 <option value="&quot;NZD/USD&quot;">NZD/USD</option>
                                 <option value="&quot;AUD/USD&quot;">AUD/USD</option>
                                 <option value="&quot;EUR/AUD&quot;">EUR/AUD</option>
                                 <option value="&quot;EUR/GBP&quot;">EUR/GBP</option>
                                 <option value="&quot;EUR/JPY&quot;">EUR/JPY</option>
                                 <option value="&quot;EUR/CAD&quot;">EUR/CAD</option>
                                 <option value="&quot;EUR/CHF&quot;">EUR/CHF</option>
                                 <option value="&quot;EUR/NZD&quot;">EUR/NZD</option>
                                 <option value="&quot;GBP/CAD&quot;">GBP/CAD</option>
                                 <option value="&quot;GBP/CHF&quot;">GBP/CHF</option>
                                 <option value="&quot;GBP/JPY&quot;">GBP/JPY</option>
                                 <option value="&quot;GBP/AUD&quot;">GBP/AUD</option>
                                 <option value="&quot;GBP/NZD&quot;">GBP/NZD</option>
                                 <option value="&quot;AUD/CAD&quot;">AUD/CAD</option>
                                 <option value="&quot;AUD/JPY&quot;">AUD/JPY</option>
                                 <option value="&quot;AUD/CHF&quot;">AUD/CHF</option>
                                 <option value="&quot;AUD/NZD&quot;">AUD/NZD</option>
                                 <option value="&quot;CHF/JPY&quot;">CHF/JPY</option>
                                 <option value="&quot;CAD/CHF&quot;">CAD/CHF</option>
                                 <option value="&quot;CAD/JPY&quot;">CAD/JPY</option>
                                 <option value="&quot;NZD/CHF&quot;">NZD/CHF</option>
                                 <option value="&quot;NZD/JPY&quot;">NZD/JPY</option>
                                 <option value="&quot;NZD/CAD&quot;">NZD/CAD</option>
                              </select>
                           </button>
                        </div>
                     </div>
                     <input type="hidden" name="exchange-rate" value="0">
                  </section>
                  <!-- react-empty: 71 -->
                  <section class="results">
                     <header>
                        <h2>Results</h2>
                     </header>
                     <dl>
                        <dt>Amount at Risk</dt>
                        <dd>50.25 USD</dd>
                        <dt>Position Size (units)</dt>
                        <dd>25,125</dd>
                        <dt>Standard Lots</dt>
                        <dd>0.2513</dd>
                        <dt>Mini Lots</dt>
                        <dd>2.5125</dd>
                        <dt>Micro Lots</dt>
                        <dd>25.125</dd>
                     </dl>
                  </section>
               </div>
               <button class="calculator-calculate">Calculate</button>
            </div>
         </div>
      </section>
      <div data-react-class="AdUnit" data-react-props="{&quot;unit_id&quot;:&quot;content_mid_billboard&quot;,&quot;lazy&quot;:true}" class="ad-unit content_mid_billboard no-ad">
         <div data-reactroot="">
            <span style="font-size: 0px;"></span>
            <div id="ad-unit-435cc817-29fb-0712-5a3c-13b3e3b2de6e" style="display: block;"></div>
            <div style="display: none;"></div>
         </div>
      </div>
   </div>
   <div data-react-class="Authentication" data-react-props="{}">
      <!-- react-empty: 1 -->
   </div>
   <div data-react-class="AdUnit" data-react-props="{&quot;unit_id&quot;:&quot;interstitial&quot;}" class="ad-unit interstitial no-ad">
      <div data-reactroot="">
         <div id="ad-unit-9c1ba629-77e2-1c7f-d540-6266fe54f4ce" style="display: block;"></div>
         <div style="display: none;"></div>
      </div>
   </div>
   <style type="text/css">@media (min-width: 1200px) { .ad-unit.top_billboard { min-width: 970px; min-height: 66px; } .ad-unit.content_mid_billboard { min-width: 728px; min-height: 90px; } .ad-unit.sidebar_med_rect { min-width: 300px; min-height: 250px; } .ad-unit.post_sponsor { min-width: 300px; min-height: 50px; } .ad-unit.half_page { min-width: 300px; min-height: 600px; } .ad-unit.mid_billboard { min-width: 970px; min-height: 66px; } .ad-unit.bottom_billboard { min-width: 970px; min-height: 66px; } }
      @media (min-width: 980px) and (max-width: 1199px) { .ad-unit.top_billboard { min-width: 970px; min-height: 66px; } .ad-unit.content_mid_billboard { min-width: 300px; min-height: 250px; } .ad-unit.sidebar_med_rect { min-width: 300px; min-height: 250px; } .ad-unit.post_sponsor { min-width: 300px; min-height: 50px; } .ad-unit.half_page { min-width: 300px; min-height: 600px; } .ad-unit.mid_billboard { min-width: 970px; min-height: 66px; } .ad-unit.bottom_billboard { min-width: 970px; min-height: 66px; } }
      @media (min-width: 768px) and (max-width: 979px) { .ad-unit.top_billboard { min-width: 728px; min-height: 90px; } .ad-unit.content_mid_billboard { min-width: 728px; min-height: 90px; } .ad-unit.sidebar_med_rect { min-width: px; min-height: px; } .ad-unit.mid_billboard { min-width: 728px; min-height: 90px; } .ad-unit.bottom_billboard { min-width: 728px; min-height: 90px; } }
      @media (min-width: 0px) and (max-width: 767px) { .ad-unit.top_billboard { min-width: 320px; min-height: 50px; } .ad-unit.content_mid_billboard { min-width: 300px; min-height: 50px; } .ad-unit.sidebar_med_rect { min-width: px; min-height: px; } .ad-unit.mid_billboard { min-width: 300px; min-height: 50px; } .ad-unit.bottom_billboard { min-width: 300px; min-height: 50px; } }
   </style>
   <script type="text/javascript">
      //<![CDATA[
      window.adTargets={"page":"calculator","calculator":"position-size"}
      //]]>
   </script>
   <script type="text/javascript">
      //<![CDATA[
      window.analyticsDimensions={}
      //]]>
   </script>
   <script src="https://bpcdn.co/assets/javascripts/vendor-8c6f879ad2.js"></script>
   <script src="https://bpcdn.co/assets/javascripts/application-4c9fd6f547.js" async="async"></script>
   <script>
      var om5600fef660ec9,om5600fef660ec9_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){om5600fef660ec9_poll(function(){if(window['om_loaded']){if(!om5600fef660ec9){om5600fef660ec9=new OptinMonsterApp();return om5600fef660ec9.init({"s":"5853.5600fef660ec9","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="//a.optnmstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;om5600fef660ec9=new OptinMonsterApp();om5600fef660ec9.init({"s":"5853.5600fef660ec9","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");
   </script>
   <script>
      var clicky_site_ids = clicky_site_ids || [];
      clicky_site_ids.push(31313);
      (function() {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'https://static.getclicky.com/js';
        ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
      })();
   </script>
   <noscript>
      &lt;p&gt;
      &lt;img alt='Clicky' height='1' src='https://in.getclicky.com/31313ns.gif' width='1'&gt;
      &lt;/p&gt;
   </noscript>
   <script>
      (function() {
        function async_load(script_url){
          var protocol = ('https:' == document.location.protocol ? 'https://' : 'http://');
          var s = document.createElement('script'); s.src = protocol + script_url;
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        }
        bm_website_code = 'FE465CB7328E4FD1';
        jQuery(document).ready(function(){async_load('asset.pagefair.com/measure.min.js')});
        jQuery(document).ready(function(){async_load('asset.pagefair.net/ads.min.js')});
      })();
   </script>
   <script>
      adroll_adv_id = "WKE6MKSUNNB7PHMNEK4DGH";
      adroll_pix_id = "QCPUQFKXDZCSJBCXUJZ6CC";
      (function () {
          var _onload = function(){
              if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
              if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
              var scr = document.createElement("script");
              var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
              scr.setAttribute('async', 'true');
              scr.type = "text/javascript";
              scr.src = host + "/j/roundtrip.js";
              ((document.getElementsByTagName('head') || [null])[0] ||
                  document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
          };
          if (window.addEventListener) {window.addEventListener('load', _onload, false);}
          else {window.attachEvent('onload', _onload)}
      }());
   </script>
   <script>
      (function(){id='m5F9BUbsl1jT-mVic6opndbGk';function l(u){var e=document.createElement('script');e.type='text/javascript';e.src='https://www.adblockanalytics.com/'+u;e.async=0;var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(e,x);}l('ads.js');l('analyze.js');})();
   </script>
  
      </div>
   </div>
   <div class="divider"></div>

   <!-- 4th row -->
   <h2 class="title">Support & Resistance</h2>
    <div id="content-box" style="position: relative;">   
      <div>
     <!-- <img src="image/flatgraph.png" alt="" srcset=""> -->
        <div class="topright">Resistance @
        <?php 
                        $query = "select resistance, support,date from snr where date=(select MAX(date) from snr)"; 
                        $rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
                        $row = pg_fetch_row($rs);
                        $msg = $row[0];
                        echo $msg;
                        $msgSupport = $row[1];
                        $msgdate = $row[2];
                        ?>
        </div>
        <div class="bottomright">Support @<?php echo $msgSupport?></div>
        <div class="updatesnr">Last Updated <?php echo $msgdate?></div>
      </div>
      </div>
          <div class="divider"></div>

          <div id="content-box2" style="position: relative;"> decision   
    <div id="show"></div>

          <!-- <script type="text/javascript" src="jquery.js"></script> -->
          <script type="text/javascript">
            $(document).ready(function() {
              setInterval(function () {
                $('#show').load('data.php')
              }, 10000);
            });
          </script>
    </div> 

   <!-- 5th row -->
   <div class="row">
         <div class="col-md-12">
            <h1> Real-time Price</h1>
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
               <br>
               <br>
               <!-- TradingView Widget END -->
            </div>
         </div>
      </div>
    </div>

    





   <script src="https://js.devexpress.com/Demos/WidgetsGallery/JSDemos/js/jquery-3.1.0.min.js"></script>
   <script src="https://cdn3.devexpress.com/jslib/17.2.3/js/dx.all.js"></script>
   <!-- Bootstrap core JavaScript
      ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="js/jquery.min.js"></script>
   <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
   </script>
   <script src="js/bootstrap.min.js"></script>
</html>