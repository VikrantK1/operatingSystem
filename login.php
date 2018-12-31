<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<style type="text/css">
		body
		{
			background-image:url("abstract-red-music-background-drum-kit-blur-69833706.jpg");
			background-size: cover;
		}
		.login
		{   margin-top:150px;
			padding-top:10px; 
			background:rgba(130,130,130,.4);
			background-size:cover;
			height:400px;
			width: 500px;
			box-shadow:10px 10px 10px black;
		}
		input[type="text"],input[type="password"]
		{   background: transparent;
			border:none;
			margin-top:20px;
			height:45px;
			width:350px;
			background-color: rgba(100,100,100,.5);
		    font-family:comic sans ms;
			font-size:20px;
			border-radius:30px;
            padding-left:30px;
            transition:3s;
            padding-left:40px;
            color:white;


		}
		.icon input[type='text'],input[type='password']
		{
         padding-left:70px;
		}
		input[type='text']:focus
		{
			border-color:dodgerBlue;
			box-shadow:0 0 30px 5px dodgerBlue;
		}
		input[type='password']:focus
		{
			border-color:dodgerBlue;
			box-shadow:0 0 30px 5px dodgerBlue;
		}
		.icon
		{

			position:relative;
			transition:3s
		}
		.icon i{
			position:absolute;
			left:55px;
			top:32px;
			font-size:30px;
			color:white;
			
		}
		
		
		
::placeholder {
  color:white;
  font-size:20px;
  font-family:comic sans ms;
}
.paragraph
{   padding-top:20px;
	color:black;
	font-size:20px;
	font-family:comic sans ms;
}
input[type="submit"]
{  
	background-color:#29a5ce;
	margin-top:20px;
	height:40px;
	width:300px;
	border:none;
	border-radius:20px;
	color:white;
	font-size:20px;
	font-family:sans-serif;
	box-shadow:0 6px #1e7896;
	cursor:pointer;

}
input[type="submit"]:active
{
	box-shadow:0 2px #1e7896;
	transform:translateY(4px);
}
img
{
	margin-top:-80px;
}
	</style>
	<title>login</title>
</head>
<body>
	</head>
<body>
<center><div class="login">
	<img src="111684-glowing-green-neon-icon-media-music-sixteenth-note.png" height="100px;" width="100px">
	<form method="post" action="login validation.php">
		<h1>Login </h1>
		<div class="icon">
		<input type="text" name="mobile1" placeholder="Enter mobile no" required>
		<br>
		<i class="fa fa-phone fa-lg fa-fw"></i>
		</div>
		<div class="icon">
		<input type="password" name="password" placeholder="Enter Password" required><br>
		<i class="fa fa-lock fa-lg fa-fw"></i>
		</div>
		<br>
		<input type="submit" value="confirm">
		<p class="paragraph">To create account <a href="signin.php">click here</a><br>
	</form>
	
</div></center>
</body>
</html>