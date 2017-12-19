<?php

?><?php 
// Connecting, selecting database
$dbconn = pg_connect("host=127.0.0.1 dbname=postgres user=postgres password=fexper")
or die('Could not connect: ' . pg_last_error());
$con = $dbconn;
// echo "database conneccted successfully!"

$query = "SELECT * FROM decision ORDER BY RANDOM() LIMIT 1"; 
$result = pg_query($con, $query) or die("Cannot execute query: $query\n");
while ($row = pg_fetch_assoc($result)) {
    echo $row['recomend']. " " . $row['date'] . '<br>';
    // echo $row['recomend'] . '<br>';
    // echo $row['date'] . '<br>';
  }

?>