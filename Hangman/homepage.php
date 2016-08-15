<?php
  
session_start();


?> 

<html>
 <head>
  <title></title>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
	
	function init()															//1st time play this
	{
	
		var guessbtn = document.createElement("input");  
		guessbtn.type = "button" ;                       
		guessbtn.value = "Make a guess" ;
		guessbtn.onclick = function() {guess();};
		document.body.appendChild(guessbtn);             
		guessbtn = null;
		
		
		
		var dlmenu = "<select id = 'myselect'>";
		dlmenu = dlmenu + "<option value='a'>a</option>";
		dlmenu = dlmenu + "<option value='b'>b</option>";
		dlmenu = dlmenu + "<option value='c'>c</option>";
		dlmenu = dlmenu + "<option value='d'>d</option>";
		dlmenu = dlmenu + "<option value='e'>e</option>";
		dlmenu = dlmenu + "<option value='f'>f</option>";
		dlmenu = dlmenu + "<option value='g'>g</option>";
		dlmenu = dlmenu + "<option value='h'>h</option>";
		dlmenu = dlmenu + "<option value='i'>i</option>";
		dlmenu = dlmenu + "<option value='j'>j</option>";
		dlmenu = dlmenu + "<option value='k'>k</option>";
		dlmenu = dlmenu + "<option value='l'>l</option>";
		dlmenu = dlmenu + "<option value='m'>m</option>";
		dlmenu = dlmenu + "<option value='n'>n</option>";
		dlmenu = dlmenu + "<option value='o'>o</option>";
		dlmenu = dlmenu + "<option value='p'>p</option>";
		dlmenu = dlmenu + "<option value='q'>q</option>";
		dlmenu = dlmenu + "<option value='r'>r</option>";
		dlmenu = dlmenu + "<option value='s'>s</option>";
		dlmenu = dlmenu + "<option value='t'>t</option>";
		dlmenu = dlmenu + "<option value='u'>u</option>";
		dlmenu = dlmenu + "<option value='v'>v</option>";
		dlmenu = dlmenu + "<option value='w'>w</option>";
		dlmenu = dlmenu + "<option value='x'>x</option>";
		dlmenu = dlmenu + "<option value='y'>y</option>";
		dlmenu = dlmenu + "<option value='z'>z</option>";

		
		
		$("#theTable2").append(dlmenu); 
		
		var btn1 = document.getElementById("bt1");
		btn1.onclick = function() {new_word_after();};
	
		new_word();
		
		
		
		 
		
	}
	
	function guess()
	{
	
		var msg = "Just to let you know, the word is ----- ";
		msg = msg + current_word;
		alert(msg);
		var check = 0;                         //assume not duplication
		
		
		found = 0;
		
		var which_letter = document.getElementById("myselect").value;       //which letter to guess
		
		array_length = check_list.length;
		///////check if guessed duplications
		
		for(var i = 0; i<array_length;i++)	
		{
			if(check_list[i] == which_letter)
			{
				check = 1;											//if duplication found, change mark to 1
			}
		}
		
		
		if(check == 1)							//duplications found, not do the rest operation
		{	
			alert("You should not pick a letter that you have already picked. Try another one.");
		}	
		/////////////////////////////////////////user does a new guess letter//////////////////////////
		else
		{
			check_list[array_length] = which_letter;					//add the guess letter to check list
	
		
			var str_length = current_word.length;
			
			for(var i = 0; i < str_length;i++)							//check if the guess letter in the word
			{
				if(current_word.charAt(i) == which_letter)
				{
				
					max_right = max_right-1;							//if found, max_right - 1   (max_right = how many letters left to guess)
					found = 1;
					
					draw_right(which_letter,i);							//if found, show the letter in the word
				}
				
			}

			if (found == 0)                                //not found
			{
				var message = which_letter + " is not in the word.";
				alert(message);
				total_guess++;
				wrong_guess++;
				draw_wrong(wrong_guess);
			}
			else											//found
			{
				var message = which_letter + " is in the word.";
				alert(message);
				total_guess++;
			
			}
		
			change_info(which_letter);									//change table info
			check_end();												//check if lose or win
		}	
	}
	/////////////////// change the info in the table///////////////////////////////
	function change_info(letter)
	{
	
		guessed_list = guessed_list + " " + letter;
		
		var info_table = document.getElementById("infotb");
		info_table.rows[1].cells[0].innerHTML = total_guess;
		info_table.rows[1].cells[1].innerHTML = wrong_guess;
		info_table.rows[1].cells[2].innerHTML = guessed_list;
		
		
	}
	
	function check_end()						//check if win or lose
	{
		if(wrong_guess == 7)
		{
			
			alert("You Lost.");
			total_lost++;
			show_scores();
			
		}
		
		if(max_right == 0)
		{
			
			alert("You win!");
			total_win++;
			show_scores();
		}
		
		
	}
	
	function draw_right(letter,index)						//if found the letter, show it in the word
	{
		
		var word_table = document.getElementById("theTable");
		word_table.rows[0].cells[index].innerHTML = letter;
	}
	
	function draw_wrong()
	{
		var canvas = document.getElementById('hangman');
        if(canvas.getContext) {
            var ctx  = canvas.getContext('2d');
            ctx.save() ; 
            ctx.translate(45,45);
            ctx.clearRect(0,0,canvas.width,canvas.height); 
            ctx.beginPath();
            if(wrong_guess >= 1) ctx.fillRect(0,0,10,10);   
            if(wrong_guess >= 2) ctx.fillRect(-5,10,20,20); 
            if(wrong_guess >= 3) ctx.fillRect(-20,10,20,5); 
            if(wrong_guess >= 4) ctx.fillRect(0,10,30,5);  
            if(wrong_guess >= 5) ctx.fillRect(-5,30,5,10);  
            if(wrong_guess >= 6) ctx.fillRect(10,30,5,10); 
			
            ctx.fillStyle="#FF0000";
            ctx.fill();
            ctx.restore();
        }
	}
	
	function new_word_after()								//get a new data from database
	{
		
		if(confirm("Are you sure to begin a new round?"))
		{
			alert("You start a new one before finishing it, it is counted as 1 loss.");
			total_rounds++;
			if(max_right != 0)							//give up, so it counted on loss
			{
				total_lost++;
			}
			show_scores();
			$.post("getWord.php", "", function(data)
			{
				// Get the data word with value tag
				var word = $(data).find("value").text();
		   ///////////////////////////////////////////////////////initiae some data
				max_right = word.length-1;
				guessed_list = "";
				check_list = new Array();
				wrong_guess = 0;
				total_guess = 0;
				//////////////////////////////
				processWord(word);
			});
		}
		else
		{
		
		}
		
	}
	function show_scores()
	{
		var score_table = document.getElementById("scoretb");
		if(fst_score == 0)
		{
			document.getElementById("scoretb").deleteRow(0);
			document.getElementById("scoretb").deleteRow(0);
		}
		
		var winrate = (total_win/total_rounds)*100;
		
		
		var info = "<tr><td>Total Rounds</td><td>Win Rounds</td><td>Lost Rounds</td><td>Winning Percentange</td></tr>";
		info = info + "<tr><td>"+total_rounds + "</td><td>"+ total_win +"</td><td>"+ total_lost +"</td><td>" +  toDecimal(winrate) + "%" +"</td></tr>";
		
		$("#scoretb").append(info);
		
		fst_score = 0;
	}
	
	
	function toDecimal(x) {    
            var f = parseFloat(x);    
            if (isNaN(f)) {    
                return;    
            }    
            f = Math.round(x*100)/100;    
            return f;    
        }	
		
	
	function new_word()								//get a new data from database
	{
			//total_rounds++;
			$.post("getWord.php", "", function(data)
			{
				// Get the data word with value tag
				var word = $(data).find("value").text();
		   ///////////////////////////////////////////////////////initiae some data
				max_right = word.length-1;
				guessed_list = "";
				check_list = new Array();
				wrong_guess = 0;
				total_guess = 0;
				//////////////////////////////
				processWord(word);
			});
	
		
	}
	
	function processWord(word)
    {
		
		
        var found = 0;
        for (var i = 0; i < wordCount; i++)
        {
            if (theWords[i] == word)					//check duplications
            {											//if the word has been picked, then we just simply do it again and 
														//pick a new one till it has not been picked yet
                new_word();
                break;
            }
        }
		
        if (found == 0)											//no duplication
        {
           theWords[i] = word;						//add current word to the array
           wordCount++;								//codes from professors' file, this part can be simply ignored
		   show(i);
        }
    }

	function show(index)
	{
		
		if(fst == 0)																	//if it is 1st time, we need to add button and pull down menu,else we add
		{																				//them after deleting the old ones
		document.getElementById("theTable").deleteRow(0);
		document.getElementById("infotb").deleteRow(0);
		document.getElementById("infotb").deleteRow(0);
		document.getElementById("imagetb").deleteRow(0);
		}
		current_word = theWords[index];
		
		var str_length = current_word.length;
		
		
		var newRow = "<tr>";
		
		

		for(var i = 1; i <str_length;i++)
		{
			newRow = newRow + "<td>"+ "_" + "</td>";
		}
		newRow = newRow + "</tr>";
		$("#theTable").append(newRow);
		
		
		var info = "<tr><td>Total Guesses</td><td>Wrong Guesses</td><td>Guessed List</td></tr>";
		info =info + "<tr><td>0</td><td>0</td><td></td></tr>";
		
		$("#infotb").append(info);
		
		
		var pic = "<tr><td><canvas id='hangman' width=150 height=150></td></tr>";
		
		$("#imagetb").append(pic);
		
		
		
		fst = 0;                              // mark to show its not 1st time visit here
		
	}
	
	

 
	
  
  </script>
 </head>
 <body>
	<b style="color:blue; font-size:48px;">Welcome to Hangman</b>
	
	<br /><br /><br /><br /><br /><br />
	
	<script type="text/javascript">
    var theWords = new Array(), wordCount = 0;					//new array to store random words for checking duplications, count the total words
	var fst = 1;
	var current_word = "";
	var wrong_guess = 0;
	var max_right = 0;
	var total_guess = 0;
	var guessed_list = "";
	var check_list = new Array();
	var total_rounds = 1;
	var total_win = 0;
	var total_lost = 0;
	var fst_score = 1;
	</script>
	
	
	
	
	<table id = "theTable" border = "0" class="thetable">
	</table>
	
	


	<form name = "menuform"
	      action = "homepage.php"
	      method = "POST">

	

	
	<br /><br />

	<input type = "button" id = "bt1" value = "Start a New Round" onclick = "init()">
	
	
	
	</form>
	<table id = "infotb" border = "1" class="infotb">
	</table>
	<br><br><br>
	
	
	
	

	<table id = "scoretb" border = "1" class="scoretb">
	</table>

	<table id = "imagetb" border = "0" class="imagetb">

                
 
	</table>

<table id = "theTable2" border = "0" class="thetable2">
	</table>


</body>
</html>