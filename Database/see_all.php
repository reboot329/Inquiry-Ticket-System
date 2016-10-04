<?php
session_start();
date_default_timezone_set('America/New_York');


	if(isset($_SESSION['option']))
	{
		
	}
	else
	{
		header('Location: index.php');
	}

	
	
	
	
	$email = $_SESSION['mm'];
	$email = str_replace(chr(32),"+",$email);
	
	
	
	
		//$db = new mysqli('localhost', 'reboot329', 'yufei123', 'assign2');
		$db = new mysqli('aa18q9zlow6rztb.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
	if ($db->connect_error):
         	die ("Could not connect to db: " . $db->connect_error);
      	endif;
		
		
	
	$result = mysqli_query($db,"SELECT * FROM Body");
	
	$rows = "";
	
	
	while($row = mysqli_fetch_array($result)) 
	{
  		//echo $row['email_address'];

		if ((strcmp($row['Email'],$email))==0)
		{
			
			
			$rows .= $row['Email'] . "|";
			$rows .= $row['Sender'] . "|";
			$rows .= $row['Subject'] . "|";
			$rows .= $row['Content'] . "^";
			
		   
			
			
			
		}
		
	}
	
	echo "$rows";
	
	

?>