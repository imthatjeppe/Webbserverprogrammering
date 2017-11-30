<!DOCTYPE HTML>
<html>


	<head>
		
		
		<style>
			
			#Låda{
			width:720px;
			height:500px;
			background-color: lightblue;
			border: 2px solid #000;
			margin-left: 440px;
			}
			
			#Submit{
			margin-left: 5px;
			
			
			}
				

			#Namn{
				
		
				
			}
	
		
		
		
		</style>
	
	
	
	</head>
	
	
	
	
	
	<body>
		
		<div id="Låda">
			<div id="Submit">
				<form method="POST" action="Submit.php">
				<label><b>Name</b></label><br>
				<div id="Namn"><input type="text" placeholder="Write fullname" name="fullname" required><br></div>
				<label><b>Password</b></label><br>
				<input type="Password" placeholder="Password" name="Password" required><br>
				<div class="Knappar"><br>
				<button type="submit" class="signinbtn">Sign in</button>
				<button type="button"  class="cancelbtn">Cancel</button>
			</div>
		</div>
	</body>






</html>