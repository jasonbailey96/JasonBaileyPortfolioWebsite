<?php
include "cconfig.php";
$dbconn = mysqli_connect 
("$server", "$server_un", "$server_pw", "$schema");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function processlogin($email, $password, $dbconn) 
{
    // Using prepared statements means that SQL injection is not possible. 
    if (!$stmt = $dbconn->prepare
	//("SELECT id, email, pw FROM login WHERE email = ? LIMIT 1"))
	("SELECT id, email, pw, salt FROM login WHERE email = ? LIMIT 1")) 
			{
		die ('Error: '  . $dbconn->error); 
			}
		else 
		
		{
        $stmt->bind_param('s', $email);  // Bind "$email" to parameter.
        //$stmt->execute();    // Execute the prepared query.
		if (!$stmt->execute()) {
                echo ("Statement failed: ". $stmt->error);
            }
        else
		{
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($user_id, $username, $userpw, $salt);
        $stmt->fetch();
 
        // hash the password with the unique salt.
        $password = hash('sha512', $password . $salt);
        if ($stmt->num_rows == 1) 
		{
         
                 // Check if the password in the database matches
                // the password the user submitted.
                if ($userpw == $password) 
				
				{
				
                    // Login successful.
                    return true;
                } 
				
				else 
				
				{
                    exit ("no user found");
                }
        }
    }} 
	
		
		
}
mysqli_close($dbconn);


?>