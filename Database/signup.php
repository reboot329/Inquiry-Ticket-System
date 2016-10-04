<?php




?> 

<html>
 <head>
  <meta charset="UTF-8">
    <title style="font-size:96px;">SignUp Page</title>
    
    
    
    
        <link rel="stylesheet" href="css/signuppage.css">
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
	//$db = new mysqli('localhost', 'reboot329', 'yufei123', 'assign2');
	$db = new mysqli('aa18q9zlow6rztb.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
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

  <div id="form-main">
  <div id="form-div">
	<form class="form" id = "form1"
			name = "menuform"
	      action = "signup.php"
	      method = "POST">

	<p class="username">	
	<input type = "text" name = "Uname" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="UserName" id="username" value = ""/>
	</p>


	<p class="password">	
	<input type = "password" name = "Pword" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Password" id="password" value = ""/>
	</p>

	<p class="email">	
	<input type = "text" name = "Email" class="validate[required,custom[email]] feedback-input] feedback-input" placeholder="Email" id="email" value = ""/>
	</p>


	<p class="nickname">	
	<input type = "text" name = "Nname" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nick Name" id="nickname" value = ""/>
	</p>



	<div class="submit">
	<input type = "submit" value = "Sign Up" id="button-blue">
	<div class="ease"></div>
	
	</div>
	</form>
   </div>

	
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