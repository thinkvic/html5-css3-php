<!DOCTYPE html>

<html>

<head>
	 
	   <title> AePoP </title>
	   
	 
	   <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, user-scalable=yes" />
		  
	   <link rel="stylesheet" type="text/css" href="mystyle.css">
	
	  <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-58419478-1', 'auto');
		ga('send', 'pageview');
	 </script>
				
       <script src="jquery-1.11.3.min.js"></script>
	
       <script>	 
		 
		     // function to show text1 - time
			function showTime()  
			{
					var s, c;
					var t1=document.getElementById("time");
					var t11=document.getElementById("seat");
					
					var localDate = new Date();
					if (localDate.getHours() >= 6 && localDate.getHours() < 12){
					   s="< Hi, Good Morning ^!^ "; 
					   c="#EEEEEE"
					} 
					else if (localDate.getHours() >=12 && localDate.getHours()<18) {
						s="< Hi, Good Afternoon ^!^ "; 
						c="#FFFFAA";
					}
					else {
						s="< Hi, Good Evening ^!^ ";
						c="#AAAAAA";
					}     
				         
					t1.innerHTML = s + " >";
					t1.style.color=c;
				    t11.style.color=c;
			}		
			
			$(document).ready (   showTime    );


                // function to change text2  - welcome
			var counter = 0;   // global variable is outside function.
			var color = ["#EEEEEE" , "#FFFFAA", "#AAAAAA", "#EEEEEE" , "#FFFFAA", "#AAAAAA" , "#EEEEEE" , "#FFFFAA"];	
			
			function welcome() {
			
				var text = ["Welcome", "Bienvenue", "Bienvenido", "欢迎", " أهلا وسهلا", "Καλώς ορίσατε", "Добро пожаловат", "Willkommen"];
				
				var t2=document.getElementById("greeting1");
				t2.innerHTML = "< " + text[counter];
				t2.style.color= color[counter];
				counter++;
				if(counter >= text.length) 
				{ counter = 0; }
			
			}
			
			$(document).ready (   function() { setInterval(welcome, 1000)  }         );
			
			
			// second part of welcome, enjoy, randomly change capital and color...

			function enjoy(){
			   var array=["ENJOY", "enjoy", "EnJoY", "eNjOy", "ENJOY", "enjoy", "EnJoY", "eNjOy"];

			   var r=Math.floor (  Math.random() * (array.length)  ) ;        
				//different from php!  8 elements, random is integer from 0 to 7...

				var t22=document.getElementById("greeting2");
				t22.innerHTML="& " + array[r] + " ^!^ >";
				t22.style.color=color[r];
				//document.write(array[r]);   avoid, this would delete all existing HTML...
			}
			
			$(document).ready (    function(){  setInterval (enjoy, 1000) }         ) ;
	
	
	

	
	// function to show text3 - quotes using ajax
			  $(document).ready(cQuote);
   
			  function cQuote() {
				   $.ajaxSetup({ cache: false }); 
					 setInterval(fetch_quotes,5000);
			  }
			  
			  function fetch_quotes(){
					$.ajax({
						method: 'post',
						url: 'quote.php',
						data: {get_quote: "quote"},
						success: function (response) {document.getElementById("quote").innerHTML = response;}
					}) ;	
			  }
        
       </script>
           
           
	
</head>
	
	
<body>
	
<div id="all">
	
		<header id="header">

				    <div id="ha">AePoP</div>
					<div  id="hb" >Archi-Neering |  Phi-Art | Design  |  City  | The Nature of Technology </div>
			
		</header>
		<br /> 
	    
		
<!-- THIS IS THE NAVIGATION LIST  -->
								
	
		<nav id="left">
				
				<ul id="a"> 
				       
			       <li>  <a href="about/about.html" style="color:#FFFFAA">  ABOUT </a>
						  <ul>
							<li> <a href="about/contact.html">Contact</a>  </li>   
					       </ul>				   
				   </li> 
					
				    <li>  <a href="art/art_statement.html" style="color:#FFFFAA">  PHI-ART  </a> 
					       <ul>
							<li> <a href="art/art.php?p=1&cat=photo"> Photo</a>  </li>   
							<li> <a href="art/art.php?p=1&cat=sculpture"> Sculpture</a>  </li>
							<li> <a href="art/art.php?p=1&cat=design"> Design</a>  </li>
							<li> <a href="art/art.php?p=1&cat=drawing"> Drawing</a>  </li>
					       </ul>
					</li>	
					
								       
					 <li>  <a href="ae/ae.html" style="color:#FFFFAA">   ARCHI-NEERING</a>
					       <ul>
							<li> <a href="ae/portfolio/port.html"> Portfolio     </a>  </li>
							<li> <a href="http://aepop.com/blog/?cat=11.html"> Articles  </a> </li>
					       </ul>
					</li>	
					
					<li>   <a href="blog" style="color:#FFFFAA">   BLOG  </a>
					       <ul>
							<li> <a href="http://aepop.com/blog/?cat=3" >Poetry </a> </li>
							<li>  <a href="http://aepop.com/blog/?cat=14" > Computer    </a> </li>
					       </ul>
					</li>
				
				</ul>		  
		  
		</nav>
		  
	


<!-- THIS IS THE MAIN RIGHT AREA -->
		
	<section id="right">
	  <div class="rightdiv">
			
			<span id="time">time</span>  <br/>    
			<span id="seat">  <  <?php
													// get contents of a file into a string
													$filename = "seat.txt";
													$handle = fopen($filename, "r");
													//$contents = fread($handle, filesize($filename));
													$contents=fgets($handle);
													fclose($handle);
													print ($contents);
												?>	 >    </span>  <br/>
		 
            <span id="greeting1">  </span>   
		    <span id="greeting2">  </span>  	<br/>

            <span id="quote"> Art WASHES AWAY from the soul the dust of everyday life. -- Pablo Picasso</span>
	  </div>
		
	   <div class="rightdiv">
			<video src="1.mp4" width="95%" autoplay controls> </video>
	   </div>	

	</section>
	
	<footer id="foot">
	 Copyright © 2014   AePoP
	</footer>



</div>
	
	
</body>


</html>