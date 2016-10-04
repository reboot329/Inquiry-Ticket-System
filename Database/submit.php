<?php
session_start();
 function __autoload($class) 
 {
	require_once $class . '.php';
 }
date_default_timezone_set('America/New_York');


	if(isset($_SESSION['option']))
	{
		
	}
	else
	{
		header('Location: index.php');
	}
?>
<?php

	$type = $_POST["type"];

	$date = new DateTime();
	$time = $date->format('F j Y g:iA');   


	$sender = $_POST["FName"] . " " . $_POST["LName"];
	
	$email = $_POST['Email'];
	$email = str_replace(chr(32),"+",$email);
	$subject = $_POST["Subject"];
	
	$status = "open";
	$content = $_POST["Content"];
	
       
	
	 

	/////////////////store in to the ticket////////////////////////////
	//$db = new mysqli('localhost', 'reboot329', 'yufei123', 'assign2');
	$db = new mysqli('aa18q9zlow6rztb.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
	if ($db->connect_error):
         	die ("Could not connect to db: " . $db->connect_error);
      	endif;
		
	$query = "insert into Ticket(Received,Sender,Email,Subject,Status,Chose) values 
			('$time','$sender','$email','$subject','$status',Tickets)";
	$db->query($query) or die ("Invalid insert " . $db->error);


	///////////////////Into the Body Table////////////////////
	$query = "insert into Body(Sender,Subject,Content) values 
					   ('$sender',
					     '$subject',
					     '$content')";
		$db->query($query) or die ("Invalid insert " . $db->error);
	//////////////////////////////////////////////////////////
	

	//$email =  $_POST['Email'];
	$content = $_POST['Content'];
	$message = "Your request has been submitted.";
	require("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP
  	$mail->SMTPAuth = true; // enable SMTP authentication
 	$mail->SMTPSecure = "tls"; // sets tls authentication
 	$mail->Host = "smtp.pitt.edu"; // sets Pitt as the SMTP server
  	$mail->Port = 587; // set the SMTP port for the Pitt server
 	$mail->Username = "fey14"; // Pitt username
  	$mail->Password = "revenger+75"; // Pitt password
	$sender = "fey14@pitt.edu";
	$receiver = $email; 
	$subj = "The Request You Have Submited";
	$msg = "Your request has been submited!";	
  	$mail->SetFrom($sender);
  	$mail->Subject = "$subj";
  	$mail->Body = "$msg";

	///////////////////////send to the sender/////////////////////////////////////
	$mail->addAddress($receiver);
	if(!$mail->Send())
	{
  		 
  		 echo "Mailer Error: " . $mail->ErrorInfo;
  		 exit;
	}


	///////////////////////send to all admins//////////////////////////
	//$db = new mysqli('localhost', 'reboot329', 'yufei123', 'assign2');
	$db = new mysqli('aa18q9zlow6rztb.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
	if ($db->connect_error):
         	die ("Could not connect to db: " . $db->connect_error);
      	endif;

	$result = mysqli_query($db,"SELECT * FROM Account");
	while($row = mysqli_fetch_array($result)) 
	{
  		//echo $row['email_address'];

		if ($row['type'] == 2)
		{
			$mail->addAddress($row['email_address']);
		}
		// only for myself

	}

	$subj = "A new request has been submitted";
	$msg = $_POST['Subject'];
	$mail->SetFrom($sender);
  	$mail->Subject = "$subj";
  	$mail->Body = "$msg";

	if(!$mail->Send())
	{
 
  		 echo "Mailer Error: " . $mail->ErrorInfo;
  		 exit;
	}
		
		echo "Ticket submitted successfully, check the confirm mail with your email account.";

?>