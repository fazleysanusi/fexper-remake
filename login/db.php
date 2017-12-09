<?php 
  // Connecting, selecting database
  $dbconn = pg_connect("host=127.0.0.1 dbname=postgres user=postgres password=fexper")
  or die('Could not connect: ' . pg_last_error());
  $con = $dbconn;

?>