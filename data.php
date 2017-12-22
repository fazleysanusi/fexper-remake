<?php

?><?php 
// Connecting, selecting database
$dbconn = pg_connect("host=127.0.0.1 dbname=postgres user=postgres password=fexper")
or die('Could not connect: ' . pg_last_error());
$con = $dbconn;
// echo "database conneccted successfully!"


// this is the method for price trend analysis 
$query1 = "select price from finance where price_id=(select MAX(price_id) from finance);"; 
$result1 = pg_query($con, $query1) or die("Cannot execute query: $query1\n");
$row = pg_fetch_row($result1);
$price =  $row['0'];

$query2 = "select * from finance where price_id=(select MAX(price_id) from finance)-1;"; 
$result2 = pg_query($con, $query2) or die("Cannot execute query: $query2\n");
$row2 = pg_fetch_row($result2);
$price2 =  $row2['0'];

$pricechange = ($price-$price2)*10000;

$result = (50 + $pricechange); 
if ($result>=100){
  $result = 100;
}
else if ($result<=0){
  $result = 0;
}
echo $result;


// this is the method for support & resistance analysis
$query3 = "select support, resistance from snr where date = (select MAX(date) from snr);"; 
$result3 = pg_query($con, $query3) or die("Cannot execute query: $query3\n");
$row = pg_fetch_row($result3);
$support =  $row['0'];
$resistance =  $row['1'];


?>