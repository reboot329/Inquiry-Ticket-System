<!DOCTYPE html>
<html>  
 <head>
  <title>init.php</title>
 </head>
 <body>
 <?php
 

      //$db = new mysqli('localhost', 'fey', 'yufei123', 'assign4');
      $db = new mysqli('aafzido3clat2j.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
      if ($db->connect_error):
         die ("Could not connect to db: " . $db->connect_error);
      endif;


	/////////////////////drop the table if they excist

      $db->query("drop table Words"); 



	////////////////////Create the table 

 
      $result = $db->query("create table Words (word varchar(255) not null)") 
							or die ("Invalid: " . $db->error);
      
	///////////////////open the file
	$admin_file = file("words-copy.txt");
      
	foreach ($admin_file as $key => $val):
		$val = str_replace(PHP_EOL, '', $val);

		//$part = explode("#",$val);
		$part =$val;
		
		$query = "insert into Words values ('$part')";
          	$db->query($query) or die ("Invalid insert " . $db->error);
		
	
	endforeach;


	////////////////////Show the initialized tables


      echo "<b>The database has been initialized with the following tables:</b>";
      echo "<br /><br />";


      $tables = array("Words"=>array("word"));
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
      echo "A word be chosen from: <br /><br />";
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
             echo "</tr>";
         endfor;
         echo "</table><br />";
      endforeach;


?>
  <p>
     Click below to start hangman game:<br/>
     <a href="http://hangman-env.us-east-1.elasticbeanstalk.com/homepage.php">GO!</a>
  </p>
 </body>
</html>