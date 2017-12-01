<?php 
/* connection config - database log in information */
$server='localhost';
$server_fn='root';
$server_sn='';
$schema='jason';

/* table specific details */
$user_tbl='login';
$stats_tbl='stats';

$dbconn = mysqli_connect("$server", "$server_un","$server_pw", "$schema");

$sql = "SELECT id, ip, browser, date FROM $stats_tbl";
$result = $dbconn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
	  echo  "id: " . $row["id"]. 
			" - ip: " . $row["ip"]. 
			"browser: " . $row["browser"]. 
			"date: " . $row["date"]. "<br>"; 
	  
}
} else {
    echo "0 results";
}
$dbconn->close();

?>