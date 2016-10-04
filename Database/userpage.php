<?php


  session_start();
 function __autoload($class) 
 {
  require_once $class . '.php';
 }
date_default_timezone_set('America/New_York');

  if(!isset($_SESSION['username']))
  {
    header('Location: index.php');
  }

?>
<html >
<head>
    <meta charset="UTF-8">
    <title style="font-size:96px;">User Page</title>
    
    
    
    
        <link rel="stylesheet" href="css/userpage.css">

    
    
<script type="text/javascript">
  
  function option(option)
  { 
    
    var ok = true;
    //var em = argument[1];
    //var option = arguments[0];    ////////////// 1 submit_a_new_ticket
                    ///////////  2 see all my ticket    
                    ///////////  3 change password
    var Lname = document.optionForm.LName.value;
    var Fname = document.optionForm.FName.value;
    var Email = document.optionForm.Email.value;
    var Subject = document.optionForm.Subject.value;
    var Content = document.optionForm.Content.value;
    //alert('Problem with request');
    // submit new ticket
    if (option == "1")                    ///////submit a new ticket, check the fields
    {
      if (Lname == "")
      {
        alert("Please enter your last name!");
        document.optionForm.LName.focus();
        ok = false;
      }
      if (Fname == "")
      {
        alert("Please enter your first name!");
        document.optionForm.FName.focus();
        ok = false;
      }
      if (Email == "")
      {
        alert("Please enter your email address!");
        document.optionForm.Email.focus();
        ok = false;
      }
      if (Subject == "")
      {
        alert("Please enter a subject!");
        document.optionForm.Subject.focus();
        ok = false;
      }if (Content == "")
      {
        alert("Please enter content!");
        document.optionForm.Content.focus();
        ok = false;
      }
    }
    
    
    // change password
    if (option == 3)
    {
      if(Email == "")
      {
        alert("You have to enter the email address to get the conformation letter to change your password.");
        document.optionForm.Email.focus();
        ok = false;
      }
    }

     if ((option == "1") && (ok == true))
     {  
      submit_ticket(option,Lname,Fname,Email,Subject,Content);
      
     }
     
     // view all ticket
     if (option == "2")
     {
      
      see_all_my_ticket();
      
     }
     
     if ((option == "3") && (ok == true))
     {
      change_password(Email);
     }
     
     

    //return result;
  }
  
  
  function submit_ticket(type,Ln,Fn,Em,Sb,Ct)
  {
    var httpRequest;
    
        if (window.XMLHttpRequest) 
        { // Mozilla, Safari, ...
            //alert('XMLHttpRequest');
            httpRequest = new XMLHttpRequest();
            if (httpRequest.overrideMimeType) 
            {
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
    data = 'type=' + type + '&LName=' + Ln + '&FName=' + Fn + '&Email=' + Em + '&Subject=' + Sb + '&Content=' + Ct; 
    //alert(data);
    httpRequest.open('POST', 'submit.php', true);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    httpRequest.onreadystatechange = function() { after_submit(httpRequest); };
    
    httpRequest.send(data);
  }
  
  
  
  function after_submit(httpRequest)
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
  
  
  function see_all_my_ticket()
  {
    var httpRequest;
    
        if (window.XMLHttpRequest) 
        { // Mozilla, Safari, ...
            //alert('XMLHttpRequest');
            httpRequest = new XMLHttpRequest();
            if (httpRequest.overrideMimeType) 
            {
                httpRequest.overrideMimeType('text/xml');
            }
        }
        else if (window.ActiveXObject) 
        { // Older versions of IE
            //alert('IE -- XMLHTTP');
            try 
            {
                httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e) 
            {
                try 
                {
                    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e) {}
            }
        }
        if (!httpRequest) 
        {
            alert('Giving up :( Cannot create an XMLHTTP instance');
            return false;
        }
    
    var type = "1";
    var data;
    
    
    httpRequest.open('POST', 'see_all.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    httpRequest.onreadystatechange = function() { after_see_all(httpRequest); };
    
    httpRequest.send(null); 
  }
  
  function after_see_all(httpRequest)
  {
    if (httpRequest.readyState == 4)
        {
           if (httpRequest.status == 200)
           {
      
        
               var result = httpRequest.responseText;
         //alert(result + "piece of shit.");
         var newRows = result.split("^");
         
         document.write("Here are all your tickets: <br><br><br><br><br>");
             for (var i = 0; i < newRows.length-1; i++)
             {
               var theRow = newRows[i].split("|");
           
               document.write("Email :     " + theRow[0]);
           document.write("<br>Sender :     " + theRow[1]);
           document.write("<br>Subject :     " + theRow[2]);
           document.write("<br>Content:     " + theRow[3]+"<br><br><br><br>");
             }

           }
           else
           {   alert('Problem with request'); }
       }
  }
  
  function change_password(Em)
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
    
    var type = "1";
    var data;
    
    data = 'type=' + type + '&Email=' + Em;
    
    httpRequest.open('POST', 'change_password.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    httpRequest.onreadystatechange = function() { after_change_password(httpRequest); };
    
    httpRequest.send(data);   
  }
</script>
    
  </head>

  <body>
<?php
  
  if(isset($_SESSION['option']))
  { 
    $ppl = $_SESSION['username'];
    //$db = new mysqli('localhost', "reboot329", "yufei123", "assign2");
    $db = new mysqli('aa18q9zlow6rztb.cqulctfc4zl7.us-east-1.rds.amazonaws.com', "root", "yufei123", "ebdb","3306");
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
  <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" name = "optionForm">
      

      <p class="lastname">
        <input name="LName" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Last Name" id="lastname" value = ""/>
      </p>

      <p class="firstname">
        <input name="FName" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="First Name" id="firstname" value = "" />
      </p>

      
      <p class="email">
        <input name="Email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" value = ""/>
      </p>

      <p class="subject">
        <input name="Subject" type="text" class="validate[required,length[1,20]] feedback-input" id="subject" placeholder="Subject" value = ""/>
      </p>
      
      <p class="text">
        <textarea name="Content" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Problem Details" value = ""></textarea>
      </p>
      
      
      <div class="submit">
        <input type="button" value="Submit" id="button-blue" onclick = 'option(1)' />
        <div class="ease"></div>
      </div>
    </form>
  </div>
    
    
    
    
  </body>
</html>
