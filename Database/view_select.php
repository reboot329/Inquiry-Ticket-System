<?php

session_start();
	 $num = $_POST['num'];
	 $str = "";
	 //unset($_SESSION['which_one_to_view']);
	
	  $db = new mysqli();
	  if ($db->connect_error):
         die ("Could not connect to db: " . $db->connect_error);
      endif;
	  
	 $result = mysqli_query($db,"SELECT * FROM Ticket WHERE Ticket.Tickets = " . "'$num'");
	 $row = mysqli_fetch_array($result);
	 
	 
	 $str .= $row['Tickets'] . "|";
	 $str .= $row['Received'] . "|";
	 $str .= $row['Sender'] . "|";
	 $str .= $row['Email'] . "|";
	 $str .= $row['Subject'] . "|";
	 $str .= $row['Tech'] . "|";
	 $str .= $row['Status']. "|";
	 
	  $result = mysqli_query($db,"SELECT * FROM Body WHERE Body.Tickets = " . "'$num'");
	 $row = mysqli_fetch_array($result);
	 $str .= $row['Content'];
	 
	echo "$str";
	
?>

