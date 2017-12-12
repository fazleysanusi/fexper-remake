<html locale="en-US" og="http://ogp.me/ns#" class="wf-opensans3a3002c4002c6002c800-n4-inactive wf-inactive">
<head>
   <title>Position Size Calculator</title>
   <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
   <script type="text/javascript" src="https://bam.nr-data.net/1/4609bcac3a?a=40062352&amp;v=1071.385e752&amp;to=cwwIFRcJVAlQFB5WU1wAEw0EElcXRklSVF5TFgoAEQlKFhoWXkZbRAoJDzoVUR9Q&amp;rst=3558&amp;ref=https://www.babypips.com/tools/position-size-calculator&amp;qt=1&amp;ap=61&amp;be=1008&amp;fe=3252&amp;dc=1898&amp;perf=%7B%22timing%22:%7B%22of%22:1513094421317,%22n%22:0,%22f%22:4,%22dn%22:6,%22dne%22:111,%22c%22:111,%22s%22:122,%22ce%22:252,%22rq%22:252,%22rp%22:964,%22rpe%22:971,%22dl%22:977,%22di%22:1896,%22ds%22:1896,%22de%22:1899,%22dc%22:3252,%22l%22:3252,%22le%22:3255%7D,%22navigation%22:%7B%7D%7D&amp;jsonp=NREUM.setToken"></script><script src="https://js-agent.newrelic.com/nr-1071.min.js"></script><script id="dfp" src="https://www.googletagservices.com/tag/js/gpt.js" async="" type="text/javascript" data-timestamp="Wed Dec 13 2017 00:00:23 GMT+0800 (+08)"></script><script id="ga" src="https://www.google-analytics.com/analytics.js" async="" type="text/javascript" data-timestamp="Wed Dec 13 2017 00:00:23 GMT+0800 (+08)"></script><script src="https://asset.pagefair.net/ads.min.js"></script><script src="https://asset.pagefair.com/measure.min.js"></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" src="https://www.adblockanalytics.com/analyze.js"></script><script type="text/javascript" src="https://www.adblockanalytics.com/ads.js"></script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"4609bcac3a","applicationID":"40062352","transactionName":"cwwIFRcJVAlQFB5WU1wAEw0EElcXRklSVF5TFgoAEQlKFhoWXkZbRAoJDzoVUR9Q","queueTime":1,"applicationTime":61,"agent":""}</script>
   <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[f.now()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,t){s[t]=o(d+t,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(l+"tracer",[f.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return t.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],n),e}finally{c.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=o(l+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,f.now()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],4:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o,i){if(!d.aborted||i){e&&e(n,r,o);for(var a=t(o),u=m(n),c=u.length,f=0;f<c;f++)u[f].apply(a,r);var p=s[y[n]];return p&&p.push([b,n,r,a]),a}}function l(e,t){v[e]=m(e).concat(t)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(n)}function g(e,t){f(e,function(e,n){t=t||"feature",y[n]=t,t in s||(s[t]=[])})}var v={},y={},b={on:l,emit:n,get:w,listeners:m,context:t,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},p={},d=t.exports=o();d.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=h.info=NREUM.info,t=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return s.abort();f(y,function(t,n){e[t]||(e[t]=n)}),c("mark",["onload",a()+h.offset],null,"api");var n=d.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),c=e("handle"),f=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=t.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
   <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
   <link crossorigin="" href="https://bpcdn.co" rel="preconnect">
   <link rel="stylesheet" media="all" href="https://bpcdn.co/assets/stylesheets/application-8f9d823189.css">
   <meta content="#ffffff" name="msapplication-TileColor">
   <style type="text/css"></style>
   <script id="omapi-script" src="//a.optnmstr.com/app/js/api.min.js" async=""></script><script type="text/javascript" async="" src="https://static.getclicky.com/js"></script><script type="text/javascript" async="" src="https://in.getclicky.com/in.php?site_id=31313&amp;res=1600x900&amp;lang=en&amp;secure=1&amp;type=pageview&amp;href=%2Ftools%2Fposition-size-calculator&amp;title=Position%20Size%20Calculator%20-%20BabyPips.com&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;jsuid=30657620&amp;mime=js&amp;x=0.884735281315109"></script>
   <link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.babypips.com" as="script">
   <script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.babypips.com"></script><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_170.js" async=""></script>
   <link rel="prefetch" href="https://tpc.googlesyndication.com/safeframe/1-0-14/html/container.html">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C800" media="all">
   <script src="//ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js" async=""></script><script async="true" type="text/javascript" src="https://s.adroll.com/j/roundtrip.js"></script><script type="text/javascript" async="" src="https://in.getclicky.com/in.php?site_id=31313&amp;type=ping&amp;jsuid=30657620&amp;mime=js&amp;x=0.10750357629932616"></script><script type="text/javascript" async="" src="https://in.getclicky.com/in.php?site_id=31313&amp;type=ping&amp;jsuid=30657620&amp;mime=js&amp;x=0.6208970776152589"></script><script type="text/javascript" async="" src="https://in.getclicky.com/in.php?site_id=31313&amp;type=ping&amp;jsuid=30657620&amp;mime=js&amp;x=0.8473207749010472"></script>
</head>
<body>
   <div data-react-class="SiteBanner" data-react-props="{}" class="react-site-banner">
      <!-- react-empty: 1 -->
   </div>
   <div class="site-content">
   <div data-react-class="AdUnit" data-react-props="{&quot;unit_id&quot;:&quot;top_billboard&quot;}" class="ad-unit top_billboard no-ad">
      <div data-reactroot="">
         <div id="ad-unit-f3d5842f-b9cd-beb3-473c-b320c62dc97d" style="display: block;"></div>
         <div style="display: none;"></div>
      </div>
   </div>
   <div class="layout layout-two-column-wide">
   <div>
      <section class="page-index-header calculator-header">
         <h1 class="title">Position Size Calculator</h1>
         <div class="divider"></div>
      </section>
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
   <script>
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '660613254010921');
      fbq('track', 'PageView');
   </script>
</body>
</html>