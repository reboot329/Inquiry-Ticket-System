<?php
function __autoload($class) {
	require_once $class . '.php';
   }
  

?>
<!DOCTYPE html>
<html>
 <head>
  <title>init.php</title>
 </head>
 <body>
 <?php
      $db = new mysqli();
      if ($db->connect_error):
         die ("Could not connect to db: " . $db->connect_error);
      endif;


	/////////////////////drop the table if they exist//////////////////////////////

      $db->query("drop table Account"); 
      $db->query("drop table Ticket");
      $db->query("drop table Body");
      //$db->query("drop table Corvettes_Equipment");


	

 
      $result = $db->query("create table Account (ID varchar(255) primary key not null,
							 password varchar(255) not null,
							 email_address varchar(255) not null,
							 name varchar(255) not null,
							 type int not null,
							 cw int not null)") 
							or die ("Invalid: " . $db->error);
      
	
	$admin_file = file("account.flat");
      
	foreach ($admin_file as $key => $val):
		$val = str_replace(PHP_EOL, '', $val);

		$part = explode("#",$val);

		/*$a_new_admin = new Account("$part[0]","$part[1]","$part[2]","$part[3]","$part[4]","$part[5]");
		echo" <br> $a_new_admin <br>";
		unset($a_new_admin);*/
		$cw = mt_rand();
		$query = "insert into Account values ('$part[0]','$part[1]','$part[2]','$part[3]','$part[4]','$cw')";
          	$db->query($query) or die ("Invalid insert " . $db->error);
		
	
	endforeach;

	//////////////////Ticket_Info table///////////////////////////////////////////////
      $result = $db->query("create table Ticket (Tickets int primary key AUTO_INCREMENT,
							     Received varchar(255) not null,
							     Sender varchar(255) not null,
						 	     Email varchar(255) not null,
							     Subject varchar(255) not null,
							     Tech varchar(255),
								Status varchar(255) not null,
								Chose int not null)")

 
							   or die ("Invalid: " . $db->error);
      
	///////////////////open the file//////////////////////////////////////////////////
	$ticket_file = file("Ticket_Info.flat");
      
	foreach ($ticket_file as $key => $val):
		$val = str_replace(PHP_EOL, '', $val);

		$part = explode("#",$val);

		
		$query = "insert into Ticket values ('$part[0]','$part[1]','$part[2]',
							'$part[3]','$part[4]','$part[5]','$part[6]','$part[0]')";
          	$db->query($query) or die ("Invalid insert " . $db->error);
		
	
	endforeach;


	///////////////////Ticket_Body table/////////////////////////////////////////////////
      $result = $db->query("create table Body (Tickets int primary key AUTO_INCREMENT,
							     Sender varchar(255) not null,
								 Email varchar(255) not null,
							     Subject varchar(255) not null,
							     Content varchar(255) not null)") 
							   or die ("Invalid: " . $db->error);
      
	///////////////////open the file
	$body_file = file("Ticket_Body.flat");
      
	foreach ($body_file as $key => $val):
		$val = str_replace(PHP_EOL, '', $val);

		$part = explode("#",$val);

		
		$query = "insert into Body values ('$part[0]','$part[1]','$part[2]','$part[3]','$part[4]')";
          	$db->query($query) or die ("Invalid insert " . $db->error);
		
	
	endforeach;







	////////////////////Show the initialized tables///////////////////////////////////////


      echo "<b>The database has been initialized with the following tables:</b>";
      echo "<br /><br />";
      $tables = array("Account"=>array("ID", "password", "email_address","name","type","cw"),

			 "Ticket"=>array("Tickets","Received","Sender","Email","Subject","Tech","Status",
					    "Chose"),

			 "Body"=>array("Tickets","Sender","Email","Subject","Content"));

      foreach ($tables as $curr_table=>$curr_keys):

         $query = "select * from " . $curr_table; #Define query
	  
	
	  
         $result = $db->query($query);  #Eval and store result
         $rows = $result->num_rows; #Det. num. of rows
	  

         $keys = $curr_keys;
?>
      <table border = "1">
      <caption><?php echo $curr_table;?></caption>
      <tr align = "center">
<?php
         foreach ($keys as $next_key):
             echo "<th>$next_key</th>";
         endforeach; 
         echo "</tr>"; 
         for ($i = 0; $i < $rows; $i++):  #For each row in result table
             echo "<tr align = center>";
             $row = $result->fetch_array();  #Get next row
             foreach ($keys as $next_key)  #For each column in row
             {
                  echo "<td> $row[$next_key] </td>"; #Write data in col

             }

		//<td> <input type = "radio"  name = "slot"</td>

             echo "</tr>";
         endfor;
         echo "</table><br />";
      endforeach;


?>
 </body>
</html>