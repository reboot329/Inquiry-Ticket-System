<?php


  session_start();
   function __autoload($class) 
 {
	require_once $class . '.php';
 }


		$db = new mysqli('aa18q9zlow6rztb.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
 		//$db = new mysqli('localhost', 'reboot329', 'yufei123', 'assign2');
		if ($db->connect_error):
         	die ("Could not connect to db: " . $db->connect_error);
      	endif;

		$option = $_POST['option'];
		$keys   = $_POST['key'];
		
		
		if($option == 1)						///////////////////close
		{
			$result = mysqli_query($db,"SELECT * FROM Ticket WHERE Ticket.Tickets ="."'$keys'");
			$ticket_row = mysqli_fetch_array($result);
			mysqli_query($db,"UPDATE Ticket SET Status = 'closed' WHERE Ticket.Tickets ="."'$keys'");
			
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
		$receiver = $ticket_row['Email']; 
		$subj = "The Request You Have Submmited has been closed.";
		
		
		
		$mail->SetFrom($sender);
		$mail->Subject = "$subj";
		
		$mail->Body = "Your Ticket has been closed";

		///////////////////////send to the sender/////////////////////////////////////
		$mail->addAddress($receiver);
		
		
		if(!$mail->Send())
		{
			echo "Message could not be sent. <p>";
			echo "Mailer Error: " . $mail->ErrorInfo;
			exit;
		}
		
		echo "<br<br><b style='color:red; font-size:16px;'>This ticket has been closed.</b>";
		}
///////////////////////////////////1111111111111111111111111//////////////////////////////////////////

///////////////////////////////////222222222222222222222222222///////////////////////////////////////////
		if($option == 2)											//////////////////////////// ASSIGN AND REMOVE
		{
			$result = mysqli_query($db,"SELECT * FROM Ticket WHERE Ticket.Tickets ="."'$keys'");
			$ticket_row = mysqli_fetch_array($result);
			if($ticket_row['Tech'] == "")
			{
				$me = $_SESSION['me'];
				mysqli_query($db,"UPDATE Ticket SET Tech = '$me' WHERE Ticket.Tickets ="."'$keys'");
				echo "<br<br><b style='color:red; font-size:16px;'>This ticket has been assigned to you.</b>";
				
			}
			else
			{
				mysqli_query($db,"UPDATE Ticket SET Tech = '' WHERE Ticket.Tickets ="."'$keys'");
				echo "<br<br><b style='color:red; font-size:16px;'>This ticket has been removed from you.</b>";
			}
		}
///////////////////////////////////22222222222222222222222222//////////////////////////////////////////

///////////////////////////////////33333333333333333333333333333///////////////////////////////////////////

			if($option == 3)											//////////////////////Email to Submitter
		{
			$result = mysqli_query($db,"SELECT * FROM Ticket WHERE Ticket.Tickets ="."'$keys'");
			$ticket_row = mysqli_fetch_array($result);
			
			require("class.PHPMailer.php");

		$mail = new PHPMailer();
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->SMTPSecure = "tls"; // sets tls authentication
		$mail->Host = "smtp.pitt.edu"; // sets Pitt as the SMTP server
		$mail->Port = 587; // set the SMTP port for the Pitt server
		$mail->Username = "fey14"; // Pitt username
		$mail->Password = "revenger+75"; // Pitt password
		$sender = "fey14@pitt.edu";
		$receiver = $ticket_row['Email']; 
		$subj = "Tech need your help for details about the tickets";
	
		
		$mail->SetFrom($sender);
		$mail->Subject = "I need the problem to be more specific.";
		
		$mail->Body = "Your Ticket has been closed";

		///////////////////////send to the sender/////////////////////////////////////
		$mail->addAddress($receiver);
		
		if(!$mail->Send())
		{
			echo "Message could not be sent. <p>";
			echo "Mailer Error: " . $mail->ErrorInfo;
			exit;
		}
		
			echo "<br<br><b style='color:red; font-size:16px;'>Your have sent email to the Send for more details!</b>";
		}
///////////////////////////////////3333333333333333333333//////////////////////////////////////////

///////////////////////////////////4444444444444444444444444///////////////////////////////////////////

	if($option == 4)
	{
			$result = mysqli_query($db,"SELECT * FROM Ticket WHERE Ticket.Tickets ="."'$keys'");
			$ticket_row = mysqli_fetch_array($result);
	
			$same = $ticket_row['Sender'];
			
			$ams ="Ticket ";
			
			$result = mysqli_query($db,"SELECT * FROM Ticket");
			while($row = mysqli_fetch_array($result)) 
		{
  		
			
			if ((strcmp($row['Sender'],$same))==0)
			{
				$ams .= $row['Tickets'] . ", ";
				
			}
		
		}
			$ams .= " are from the same Submmiter, check it out.";
			echo "$ams";
	
	}

/////////////////////////////////////////Delete//////////////////////////
		if($option == 5)
	{
			
			
			mysqli_query($db,"DELETE FROM Ticket WHERE Ticket.Tickets ="."'$keys'");
			
			
			echo "<br<br><b style='color:red; font-size:16px;'>This ticket has been deleted.</b>";
			
	
			
			
	
	}

	



?>