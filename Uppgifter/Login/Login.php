<!DOCTYPE HTML>
<html>


	<head>
		
		
		<style>
			
			#Låda{
			width:300px;
			height:300px;
			background-color: lightblue;
			border: 2px solid #000;
			margin:auto;
			font-size:28px;
			
			}
			
			#Submit{
			margin-left: 20%;
			margin-top: 5%;
			
			
			
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
			padding:15px;
			width:170px;
			height:50px;
			transition: all 0.5s;
			cursor: pointer;
			}
			
			.button span{
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
			}
			
			.button span:after {
			content: '\00bb';
			position: absolute;
			opacity: 0;
			top: 0;
			right:-20px;
			transition: 0.5s;
			}
			
			.button:hover span{
			padding-right: 25px;
				
			}
			
			.button:hover span:after{
			opacity: 1;
			right:0;
			
			}
			
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