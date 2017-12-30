<?php 
// Connecting, selecting database
$dbconn = pg_connect("host=127.0.0.1 dbname=postgres user=postgres password=fexper")
or die('Could not connect: ' . pg_last_error());
$con = $dbconn;
// echo "database conneccted successfully!"


// this is the method for price sentiment analysis 
$query4 = "select percentage from sentiment where date = (select MAX(date) from sentiment);";
$result4 = pg_query($con, $query4) or die("Cannot execute query: $query4\n");
$row = pg_fetch_row($result4);
$sentiment = $row['0'];
echo $sentiment;

?>