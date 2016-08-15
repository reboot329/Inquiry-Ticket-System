<?php

session_start();
 function __autoload($class) {
	require_once $class . '.php';
   }
date_default_timezone_set('America/New_York');
if(!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}
?>
  

<html>
<head>
	<title></title>
	<script type="text/javascript">
	
	function option()
	{	
		
		var ok = true;
		//var em = argument[1];
		//var option = arguments[0];    ////////////// 1 submit_a_new_ticket
										///////////  2 see all my ticket		
										///////////  3 change password
		var rn = document.optionForm.rn.value;
		var np = document.optionForm.np.value;
		if (ok == true)
		{	
			cw(rn,np);
		}

		//return result;
	}
	
	

     
	function cw(rn,np)
	{
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
		
		
		var data;
		var type = 1;
		data = 'type=' + type + '&rn=' + rn + '&np=' + np;
		
		httpRequest.open('POST', 'cw2.php', true);
		httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		
		httpRequest.onreadystatechange = function() { after_cw(httpRequest); };
		
		httpRequest.send(data);	
	}
	
	function after_cw(httpRequest)
	{
		if (httpRequest.readyState == 4)
        {
           if (httpRequest.status == 200)
           {
			
				
               var result = httpRequest.responseText;
			   
			   
				alert(result);
           }
           else
           {   alert('Problem with request'); }
       }
	}
	
	
</script>

	
</head>
<body>
<font size=10>Welcome to Password Change Page</font><br /><br />


	<form  name = "optionForm">

	<b>Enter The Random Number:</b>
	<input type = "text" name = "rn" value = "">
	<br /><br />

	<b>Enter A New Password:</b>
	<input type = "text" name = "np" value = "">
	<br /><br />
	


	<input type = "button" value = "change" onclick = 'option()'>


	</form>


</body>
</html>