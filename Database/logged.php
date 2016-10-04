<?php

session_start();


?> 

<html>
 <head>
  <title></title>
  
 </head>
 <body>
<?php
 
if(isset($_POST['Uname']))
{


	//////check if logged

	//user is an adminstrator.
	if(verify()===2)
	{
		$_SESSION['option'] = 'logged';
		$_SESSION['username2'] = $_POST['Uname'];
		$saysay = $_POST['Uname'];
		
		header('Location: adminpage.php');
	}
	//user is a guest.
	else if(verify()===1)
	{
		$_SESSION['option'] = 'logged';
		$_SESSION['username'] = $_POST['Uname'];
		header('Location: userpage.php');
	}
	//wrong username or password.
	else 
	{	
		unset($_POST['ID']);
		echo "Wrong username or password.";
	}
}
else
{

	show_head();
	log_page();
	show_end();
}

/* 
/	Verify username and password, determine type of current user.
/	1 Noraml customer
/	2 Adminstrator
/	0 Wrong username or password
*/
function verify()
{
	$username = $_POST['Uname'];
	$password = $_POST['Pword'];

	
	$db = new mysqli('aa18q9zlow6rztb.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
	//$db = new mysqli('localhost', 'reboot329', 'yufei123', 'assign2');
	if ($db->connect_error):
        		die ("Could not connect to db: " . $db->connect_error);
    endif;
		
	////////////////check DB////////////////////////////	

	$result = mysqli_query($db,"SELECT * FROM Account");

	//go through DB
	while($row = mysqli_fetch_array($result)) 
	{
  		if( (strcmp($row['ID'],$username)==0) && (strcmp($row['password'],$password)==0))
		{
			if((strcmp($row['type'],"1")==0))                                               ////////type==1===user
			{
				$_SESSION['em'] = $row['email_address'];
				return 1;
			}
			else if ((strcmp($row['type'],"2")==0))											//////////////type==2===admin
			{
				$_SESSION['me'] = $row['name'];
				return 2;
			}
				
		}
			
	}
	return 0;
}

function signup()
{
	header('Location: signup.php');
}

function log_page()
{

?>

	<form name = "menuform"
	      action = "index.php"
	      method = "POST">

	<b style="">Enter your ID:</b>
	<input type = "text" name = "Uname">
	<br /><br />

	<b style="">Enter your password:</b>
	<input type = "text" name = "Pword">
	<br /><br />

	<input type = "submit" value = "Login">
	</b></b></b></b>

	
	</form>

	<form name = "menuform"
	      action = "signup.php"
	      method = "GET">
    <b style="">Create a guest account:</b></b></b>
    <input type = "submit" value = "Sign Up">
    <br /><br />
    <b style="font-size:15px;color:red">(Try an Admin account with Testadmin1:Testadmin2)</b>
    <br /><br />


	
	
	
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