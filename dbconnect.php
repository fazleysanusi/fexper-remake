<?php 
  $conn_string = "host=127.0.0.1 port=5432 dbname=postgres user=postgres password=fexper";
  $dbconn = pg_connect($conn_string);
  //connect to a database named "postgres" on the host "postgres" with a username and password
  $conn = $dbconn;
  
?>