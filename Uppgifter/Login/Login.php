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
			font-size:28px;
			}
			
			#Submit{
			margin-left: 37.5%;
			margin-top: 25%;
			
			
			
			}
				

			#Namn{
				
		
				
			}
			
			.button{
			display: inline-block;
			border-radius: 5px;
			background-color:orange;
			border:none;
			color:#FFFFFF;
			text-align:center;
			font-size:20px;
		
		</style>
	
	
	
	</head>
	
	
	
	
	
	<body>
		
		<div id="Låda">
			<div id="Submit">
				<form method="POST" action="Submit.php">
				<label><b>Username</b></label><br>
				<div id="Namn"><input type="text" placeholder="Write Username" name="fullname" required><br></div>
				<label><b>Password</b></label><br>
				<input type="Password" placeholder="Password" name="Password" required><br>
				<br>
				<button class="button" style="vertical-align:middle"> <span>Sign in</span></button>
			</div>
		</div>
	</body>






</html>