<?php 
$email=$_POST['email']; //takes from regform input type
$pass=$_POST['password']; //takes from regform input type
$salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true)); //encrypted variable, mixes up a random number 
$pass = hash('sha512', $pass . $salt); //taking salt and encrypting it again
include "../includes/cconfig.php"; 
$dbconn = mysqli_connect 
("$server", "$server_un", "$server_pw", "$schema");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to mysql database" . mysqli_connect_error();
}
if (!$_POST['email'])
{ die('You did not add an email address'); 
} 

else if (!$_POST['password'])
{ die('You did not add a password'); 
} 

{

if( ! $stmt = $dbconn->prepare( "INSERT INTO `login` (`email`, `pw`, `salt`) VALUES (?, ?, ?)" ) ) //prepared statement prevents sql injection. prepares to insert values
//insert into `login` must match table followed by field names, question marks are placeholders, do not change
 {
  die ('Error: ' . $dbconn->error); 
 }
 else 
 {
$stmt->bind_param('sss',$email, $pass, $salt); //3 s' must match number of fields/variables
 }
 
  if ($stmt->num_rows == 0) //no matching entry in database
  { 
  if (!$stmt->execute()) { //if fail to insert
                echo ("Statement failed: ". $stmt->error);
            }
        else //successful entry
		{
		//header("Location: ../reg_confirm.php"); //if you have output prior to this point will cause errors 
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../reg_confirm.php">'; // alternative to header
    
die();
		}
  }
  
  else
  {
 die ( "Sorry this username already exists, 
		Please select a new one");
		}
		}
mysqli_close($dbconn);
?>