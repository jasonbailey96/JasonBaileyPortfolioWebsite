<?php
session_start();
include "cconfig.php";
include "log_func.inc.php";
$dbconn = mysqli_connect 
("$server", "$server_un", "$server_pw", "$schema");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//starting our session
 
// creating session variables
if (isset($_POST['email'], $_POST['password'])) // has data been posted?
 {
	$email= $_POST['email'];
    $password = $_POST['password']; // The hashed password.
    if (processlogin($email, $password, $dbconn) == true) {
        // Login success 
        //$_SESSION['sess_print'] = hash ('sha512', $_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
		$_SESSION['AUTH']= "OK";
		header('Location: ../admin/index.php');
    } else {
	        // Login failed 
        header('Location: ../admin/index.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Sorry we have been unable to process your requested, please contact the administrator';
}
mysqli_close($dbconn);
?>