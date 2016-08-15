<?php




?> 

<html>
 <head>
  <title></title>
 </head>
 <body>
<?php

if(isset($_POST['Uname']))
{
	if(register() == -1)
	{
?>
		<script type="text/javascript">
		alert("Username or Email exists in database. Try another one.");
		window.location.href = "signup.php";
		</script>
<?php
		//header('Location: signup.php');
	}
	else
	{
?>
		<script type="text/javascript">
		alert("Successfully signed up. Now log in with your new account.");
		window.location.href = "index.php";
		</script>
<?php

		//header('Location: logpage.php');
	}
	
}
else
{
	show_head();
	signUpPage();
	show_end();
}


function register()
{
	$username = $_POST['Uname'];
	$email = $_POST['Email'];
	$db = new mysqli();
	if ($db->connect_error):
        		die ("Could not connect to db: " . $db->connect_error);
    endif;

    $result = mysqli_query($db,"SELECT * FROM Account");

	//go through DB
	while($row = mysqli_fetch_array($result)) 
	{
  		if((strcmp($row['ID'],$username)==0) || (strcmp($row['email_address'],$email)==0))
		{
			return -1;		
		}
		

			
	}

	$password = $_POST['Pword'];

	$nickname = $_POST['Nname'];
	$role = 1;						//admin account is pre-reserved
	$cw = mt_rand();

	$query = "insert into Account values ('$username','$password','$email','$nickname','$role','$cw')";
    
    $db->query($query) or die ("Invalid insert " . $db->error);


	
		
}

function signUpPage()
{

?>

	<form name = "menuform"
	      action = "signup.php"
	      method = "POST">

	<b style="">Enter Username:</b>
	<input type = "text" name = "Uname">
	<br /><br />

	<b style="">Enter password:</b>
	<input type = "text" name = "Pword">
	<br /><br />

	<b style="">Enter Email Address:</b>
	<input type = "text" name = "Email">
	<br /><br />

	<b style="">Enter A nickname:</b>
	<input type = "text" name = "Nname">
	<br /><br />



	<input type = "submit" value = "Sign Up">
	
	
	
	</form>

	
<?php	
}

function show_head()
{
?>
<html>
<head>
<title>Login Page</title>
</head>
<?php
}
function show_end()
{
    echo "</html>";
}
?>
</body>
</html>