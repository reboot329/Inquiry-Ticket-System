<?php


  session_start();
 function __autoload($class) {
	require_once $class . '.php';
   }
date_default_timezone_set('America/New_York');

	if(!isset($_SESSION['username2']))
	{
		header('Location: index.php');
	}
		$me = $_SESSION['me'];
	
?>
  

<html>
<head>
	<title>Admin Page</title>
<script type="text/javascript">
	
	var which_one_to_view = 0;
	var which_col = 0;
	var old = 10;
	
	function logout()
	{
		location.href="logout.php";
	}
	
	function view_spe_tickets(wat)
	{	
		if(wat == 4)
		{
			convinient();
		}									//wat == 1  Open_Tickets
		var num;									//wat == 2  My_Tickets
		var spe;									//wat == 3 Unassigned_Tickets
		if (old == wat)									//wat == 4 all_Tickets
		{
			wat = 1;
		}
		else
		{
			old = wat;
		}
		
		if (wat == 1)
		{
			num = 6;
			spe = "open";
		}
		if (wat == 2)
		{
			num = 4;
			spe = "open";
			document.btnForm.View_My_Tickets.value = "View open Tickets";
			//document.btnForm.View_My_Tickets.onclick = "view_spe_tickets(1)";
		}
		if (wat == 3)
		{
			num = 5;
			spe = "";
			
			//document.btnForm.View_Unassigend_Tickets.onclick = "view_spe_tickets(1)";
		}	
		if (wat == 4)
		{

			num = 0;
			spe = 0;
			document.btnForm.View_All_Tickets.value = "View open Tickets";
		}
											
											
		
		var DTable = Otable.tBodies[0]; 
		
		var DataRows = DTable.rows;
		
		
											
		var MyArr=new Array; 
		var count = 0;
		/////////DataRows.length////////////////////////////// 
		var lh = DataRows.length;
		
			for(var i=0;i<lh;i++){
				if(wat ==4)
				{
					if(DTable.rows[count].cells[num].innerText > spe)
					{	
							
						count++;
					}
					else
					{
						DTable.deleteRow(count);
					}
				}
				else
				{
					if(DTable.rows[count].cells[num].innerText == spe)
					{	
							
						count++;
					}
					else
					{
						DTable.deleteRow(count);
					}	 
				}									
		
			}
	
	}
	
	function which_one(ticket_num)
	{
		which_one_to_view = ticket_num;
	}
	
	function view_select()
	{	
		var data;
			
		if(which_one_to_view == 0)
		{
			alert("Please selece one on the rightmost column.");
	
		}
		else
		{
				data = 'num=' + which_one_to_view;
		
			var httpRequest;
			
	        if (window.XMLHttpRequest) { // Mozilla, Safari, ...
	            //alert('XMLHttpRequest');
	            httpRequest = new XMLHttpRequest();
	            if (httpRequest.overrideMimeType) {
	                httpRequest.overrideMimeType('text/xml');
	            }
	        }
	        else if (window.ActiveXObject) { // Older versions of IE
	            //alert('IE -- XMLHTTP');
	            try {
	                httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
	                }
	            catch (e) {
	                try {
	                    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	                }
	                catch (e) {}
	            }
	        }
	        if (!httpRequest) {
	            alert('Giving up :( Cannot create an XMLHTTP instance');
	            return false;
	        }
			
			
			httpRequest.open('POST', 'view_select.php', true);
			httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			httpRequest.onreadystatechange = function() { after_view_select(httpRequest); };
			
			httpRequest.send(data);
		}
		
		
	}
	
	function view_my(me)
	{
		var DTable = Otable.tBodies[0]; 
		
		var DataRows = DTable.rows;
		
		
											
		var MyArr=new Array; 
		var count = 0;
		/////////DataRows.length////////////////////////////// 
		var lh = DataRows.length;
		
			for(var i=0;i<lh;i++){
				
							
					
					if(DTable.rows[count].cells[5].innerText == me)
					{	
							
						count++;
					}
					else
					{
						DTable.deleteRow(count);
					}	 
											
		
			}
	}
	
	function after_view_select(httpRequest)
	{
		if (httpRequest.readyState == 4)
        {
           if (httpRequest.status == 200)
           {
	       
               var result = httpRequest.responseText;
				var new_arr = result.split("|");

				
				document.write("<body style='background-color:lightblue;'>");
				document.write("<b style='font-size:36px;'>Selected Ticket<br><br></b>");



				document.write("<table border = '1px solid black; border-collapse=collapse;' style='width:100%; text-align:left;'>");
				document.write("<tr style='background-color:lightblue;'><th>Ticket Info</th><th>Details</th></tr>");
				document.write("<tr><th>Ticket ID</th><th>" + new_arr[0] + "</th></tr>");
				document.write("<tr><th>Received Time</th><th>" + new_arr[1] + "</th></tr>");
				document.write("<tr><th>Sender Name</th><th>" + new_arr[2] + "</th></tr>");
				document.write("<tr><th>Sender Email</th><th>" + new_arr[3] + "</th></tr>");
				document.write("<tr><th>Subject</th><th>" + new_arr[4] + "</th></tr>");
				document.write("<tr><th>Current Tech Support</th><th>" + new_arr[5] + "</th></tr>");
				document.write("<tr><th>Ticket Content</th><th>" + new_arr[7] + "</th></tr>");
				document.write("</table>");

				/*
				document.write("<b style='color:red; font-size:16px;'>Ticket ID:                  </b>");
				document.write(new_arr[0]);

				
				
				document.write("<br><br>");
				document.write("<b style='color:red; font-size:16px;'>Received Time:                  </b>");
				document.write(new_arr[1]);
				
				document.write("<br><br>");
				document.write("<b style='color:red; font-size:16px;'>Sender Name:                  </b>");
				document.write(new_arr[2]);
				
				document.write("<br><br>");
				document.write("<b style='color:red; font-size:16px;'>Sender Email:                  </b>");
				document.write(new_arr[3]);
				
				document.write("<br><br>");
				document.write("<b style='color:red; font-size:16px;'>Subject:                  </b>");
				document.write(new_arr[4]);
				
				document.write("<br><br>");
				document.write("<b style='color:red; font-size:16px;'>Current Tech:                  </b>");
				document.write(new_arr[5]);
				
				document.write("<br><br>");
				document.write("<b style='color:green font-size:16px;'>Content:       <br><br>           </b>");
				document.write(new_arr[7]);
				document.write("<br><br><br><br><br><br><br>");

				*/
				
				var closebtn = document.createElement("input");
				//background-color: #008CBA;
				closebtn.style = " color: white; padding: 15px 32px;  text-align: center; text-decoration: none; display: inline-block;  font-size: 16px;  border-radius: 12px; background-color: black; color: grey;border-radius: 50%;" ; 
				closebtn.type = "button" ;                       
				closebtn.value = "Close" ;
				closebtn.onclick = function() { option(1,new_arr[0]); };
				document.body.appendChild(closebtn);             
				closebtn = null;
				
				
				var assignbtn = document.createElement("input");  
				assignbtn.type = "button" ;
				assignbtn.style = " background-color: #008CBA; padding: 15px 32px;  text-align: center; text-decoration: none; display: inline-block;  font-size: 16px;  border-radius: 12px;" ;                        
				assignbtn.value = "Assign/Remove" ;
				assignbtn.onclick = function() { option(2,new_arr[0]); };
				document.body.appendChild(assignbtn);             
				assignbtn = null;
				
				var emailbtn = document.createElement("input");  
				emailbtn.type = "button" ;   
				emailbtn.style = " background-color: #4CAF50; padding: 15px 32px;  text-align: center; text-decoration: none; display: inline-block;  font-size: 16px;  border-radius: 12px;" ;                    
				emailbtn.value = "Email to Submitter" ;
				emailbtn.onclick = function() { option(3,new_arr[0]); };
				document.body.appendChild(emailbtn);             
				emailbtn = null;
				
				var delbtn = document.createElement("input");  
				delbtn.type = "button" ;
				delbtn.style = "background-color: rgb(255, 141, 0); padding: 15px 32px;  text-align: center; text-decoration: none; display: inline-block;  font-size: 16px;  border-radius: 12px;" ;                      
				delbtn.value = "Tickets from same Submmitter" ;
				delbtn.onclick = function() { option(4,new_arr[0]); };
				document.body.appendChild(delbtn);             
				delbtn = null;
				
				
				document.write("<br><br>");
				
				var backbtn = document.createElement("input");  
				backbtn.type = "button" ;
				backbtn.style = "background-color: grey; padding: 15px 32px;  text-align: center; text-decoration: none; display: inline-block;  font-size: 16px;  border-radius: 12px;" ;                       
				backbtn.value = "Back" ;
				
				backbtn.onclick = function() {convinient();};
				document.body.appendChild(backbtn);             
				backbtn = null;
				
				var btn = document.createElement("input");  
				btn.type = "button" ;  
				btn.style = "background-color: red; padding: 15px 32px;  text-align: center; text-decoration: none; display: inline-block;  font-size: 16px;  border-radius: 12px;" ;                     
				btn.value = "Delete the ticket" ;
				btn.onclick = function() { option(5,new_arr[0]); };
				document.body.appendChild(btn);             
				btn = null;
				document.write("<br><br>");
				document.write("</body>");
				
           }
           else
           {   alert('Problem with request'); }
       }
	}
	function convinient()																			///this is only for checking, not on the grading rubric
	{
		location.href="adminpage.php";
	}
	
	
	function option(type,data)
	{
		var option = type;					//1 == close
		var key = data;
		
		
		var httpRequest;
		
		var str  = 'option=' + option + '&key=' + key;
        if (window.XMLHttpRequest) { // Mozilla, Safari, ...
            //alert('XMLHttpRequest');
            httpRequest = new XMLHttpRequest();
            if (httpRequest.overrideMimeType) {
                httpRequest.overrideMimeType('text/xml');
            }
        }
        else if (window.ActiveXObject) { // Older versions of IE
            //alert('IE -- XMLHTTP');
            try {
                httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
                }
            catch (e) {
                try {
                    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e) {}
            }
        }
        if (!httpRequest) {
            alert('Giving up :( Cannot create an XMLHTTP instance');
            return false;
        }
		
		httpRequest.open('POST', 'option.php', true);
		httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		
		httpRequest.onreadystatechange = function() { donedone(httpRequest); };
	
		httpRequest.send(str);
		
	}
	
	function donedone(httpRequest)
	{
		if (httpRequest.readyState == 4)
        {
           if (httpRequest.status == 200)
           {
			
				
               var result = httpRequest.responseText;
			   
			   
	           
		           document.write(result);
				   document.write("<br>");
			   
		           
			   
			   
				
           }
           else
           {   alert('Problem with request'); }
       }
	}
	
	
	function sortby(way)
	{
		
		if(way == "Tickets")
		{
			sort_by = 0;
		}
		if(way == "Received")
		{
			sort_by = 1;
		}
		if(way == "Sender")
		{
			sort_by = 2;
		}
		if(way == "Email")
		{
			sort_by = 3;
		}
		if(way == "Subject")
		{
			sort_by = 4;
		}
		if(way == "Tech")
		{
			sort_by = 5;
		}
		
		
	}

	function do_sort()
	{
	
	
		var DTable1 = document.getElementById("myTable");
		var DTable = DTable1.tBodies[0]; 
		var DataRows = DTable.rows;

		
		
		var MyArr=new Array; 
		
		/////////////////////////////////////// 
		for(var i=0;i<DataRows.length;i++){ 
			MyArr[i]=DataRows[i]; 
		} 
		MyArr.sort(CustomCompare(sort_by,"string")); 
		
		
		//only see the result
		var frag=document.createDocumentFragment(); 
		for(var i=0;i<MyArr.length;i++){ 
			frag.appendChild(MyArr[i]); //
		} 
			DTable.appendChild(frag);
		
			
			
	}
	function CustomCompare(Col,DataType){ 
		
		return function CompareTRs(TR1,TR2){ 
			var value1,value2; 
			if (Col == 0) DataType = "int";
				if(TR1.cells[Col].getAttribute("customvalue")){ 
					value1=convert(TR1.cells[Col].getAttribute("customvalue"),DataType); 
					value2=convert(TR2.cells[Col].getAttribute("customvalue"),DataType); 
					
				} 
				else{ 
					value1=convert(TR1.cells[Col].firstChild.nodeValue,DataType); 
					value2=convert(TR2.cells[Col].firstChild.nodeValue,DataType); 
				}

				
			if(value1 < value2) 
				return -1; 
			else if(value1 > value2) 
				return 1; 
			else 
				return 0; 
		}; 
	} 

	function convert(DataValue,DataType){ 
		switch(DataType){ 
			case "int": 
				return parseInt(DataValue); 
			case "float": 
				return parseFloat(DataValue); 
			case "date": 
				return new Date(Date.parse(DataValue)); 
		default: 
			return DataValue.toString(); 
		} 	
	}        
</script>

	
</head>
<body scroll=no>

<link rel="stylesheet" href="css/adminpage.css">
<div id="title-div">
<font style="color:black; font-size:36px; align-content: center;">Admin Page</font><br /><br />
</div>
<div id="table-div">
<?php
	
	if(isset($_SESSION['option']))
	{	
		$ppl = $_SESSION['username2'];
		
		$db = new mysqli('aa18q9zlow6rztb.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
		//$db = new mysqli('localhost', 'reboot329', 'yufei123', 'assign2');
		if ($db->connect_error):
         	die ("Could not connect to db: " . $db->connect_error);
      	endif;

		$result = mysqli_query($db,"SELECT * FROM Account");
		while($row = mysqli_fetch_array($result)) 
		{
  		

			if ((strcmp($row['ID'],$ppl))==0)
			{
				$em = $row['email_address'];
				$_SESSION['mm'] = $em;
				
			}
		
		}
	}
	else
	{
		header('Location: index.php');
	}
?>

	
	<table id = "myTable" border = "1">
<?php

	$db = new mysqli('aa18q9zlow6rztb.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
	//$db = new mysqli('localhost', 'reboot329', 'yufei123', 'assign2');
		if ($db->connect_error):
         	die ("Could not connect to db: " . $db->connect_error);
      	endif;
		
	$result = $db->query("select Tickets, Received, Sender, Email, Subject, Tech, Status from Ticket");
    $rows = $result->num_rows;

    	
		echo "<thead>";
		echo "<tr id = 'tr-div' align = 'center' style='background-color:lightgreen;'>";
		echo "<td>Tickets</td>";
        echo "<td>Received</td>";
        echo "<td>Sender</td>";
		echo "<td>Email</td>";
		echo "<td>Subject</td>";
		echo "<td>Tech</td>";
		echo "<td>Status</td>";
		echo "<td>Chose</td>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
    for ($ctr = 1; $ctr <= $rows; $ctr++):
        echo "<tr align = 'center'>";
        $row = $result->fetch_array();
        $tickets = $row["Tickets"];
        $received = $row["Received"];
        $sender = $row["Sender"];
        $email = $row["Email"];
		$subject = $row["Subject"];
		$tech = $row["Tech"];
		$status = $row["Status"];
		
		
        echo "<td>$tickets</td>";
        echo "<td>$received</td>";
        echo "<td>$sender</td>";
		echo "<td>$email</td>";
		echo "<td>$subject</td>";
		echo "<td>$tech</td>";
		echo "<td>$status</td>";
        echo "<td><input type = 'radio' name = 'options' 
                       value = '$tickets'
                       onclick = 'which_one( $tickets)'></td>";
        echo "</tr>";
    endfor;	
	echo "</tbody>";
		 echo "<tr align = center style='background-color:grey;'>";
		 
?>		 
		 <td>Sort By <input type = "radio" name = "Sortby"  value = "Tickets" onclick = "sortby('Tickets')"</td>

		 <td>Sort By <input type = "radio" name = "Sortby"  value = "Received" onclick = "sortby('Received')"</td>
		 <td>Sort By <input type = "radio" name = "Sortby"  value = "Sender" onclick = "sortby('Sender')"</td>
		 <td>Sort By <input type = "radio" name = "Sortby"  value = "Email" onclick = "sortby('Email')"</td>
		 <td>Sort By <input type = "radio" name = "Sortby"  value = "Subject" onclick = "sortby('Subject')"</td>
		
<?php		 
		 echo "</tr>";
		 $me = $_SESSION['me'];
?>
</table>
	</form>

	<form name = "btnForm">
	<div id ="buttons-div">
	<input type = "button" class ="button button1" name = "View_Open_Tickets" value = "View All Tickets" onclick = "sortby('Tickets')">
	
	<input type = "button" class ="button button2" name = "Sort" value = "Sort" onclick = "do_sort()">

	<input type = "button" class ="button button3" name = "View_Selected_Ticket" value = "View Selected Ticket" onclick = 'view_select()'>
		
	<!-- 
	<input type = "button" name = "View_My_Tickets" value = "View My Tickets" onclick =  'view_my("<?php echo "$me";?>")' >
		-->
	<input type = "button" class ="button button4" name = "Logout" value = "Logout" onclick = "logout()">
	</div>
	<!-- 
	<input type = "button" name = "View_Unassigned_Tickets" value = "View Unassigned Tickets" onclick = "view_spe_tickets(3)">
	-->
	</form>
	<script type="text/javascript">	
	var Otable = document.getElementById("myTable");
	</script>

	
	</div>
</body>
</html>