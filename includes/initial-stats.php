<?php include "../includes/cconfig.php";

$dbconn = mysqli_connect("$server", "$server_un","$server_pw", "$schema");

if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL:" .mysqli_connect_error();
}	
//variables are defined here to insert info into DB table stats
$timestamp = $_SERVER['REQUEST_TIME'];
$date = date("d/m/Y", $timestamp);
$browser = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];

$sql = mysqli_query($dbconn,
"INSERT INTO `$schema`.`$stats_tbl` (`ip`,`browser`,`date`)
VALUES
('$ip','$browser','$date')")

 or die;
 //sql query - insert info into sql DB
 echo "SQL Statement - ".$sql."<BR>";
 
    $results = mysqli_query($sql, $dbconn);
	echo "Server Return - ".$results."<BR>";
	(mysqli_close($dbconn));
?>