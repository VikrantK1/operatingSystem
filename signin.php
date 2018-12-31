
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">	
<style type="text/css">
body
{
background-image:url("2BDXYhN.jpg");
background-size:cover;
font-size:18px;
font-family:sans-serif;
font-weight:500;
background-position:fixed;
}
h1
{   color:red;
	text-align:left;
     
     padding-bottom:10px;
     animation: mymove 5s infinite;
     
}
@keyframes mymove {
  50% {text-shadow: 10px 15px 30px blue;}
}
 
.signin
{
position:relative;	
margin-top:15px;
padding-top:1px;
margin-left:100px;
margin:5% auto;
width:800px;
height:550px;
background:rgba(130,130,130,.3);
box-shadow:10px 10px 10px black;	
}
::placeholder {
  
  font-family:comic sans ms;
}
.form1
{

position:absolute;
box-sizing:border-box;
padding-top:1px;
padding-left:40px;
width:400px;
height:500px;
}
input[type="text"],input[type="password"],input[type="email"]
{   display:block;
	box-sizing:border-box;
	margin-bottom:15px;
	height:40px;
	width:400px;
    border:0px;
    border-radius:30px;
    font-size:20px;
	border-bottom:1px solid;
	padding-left:60px;
}

input[type="submit"]
{
	margin-bottom:10px;
	width:350px;
	height:38px;
	background:#f22913;
	border:none;
	border-radius:10px;
	font-family:bookman;
	text-transform:uppercase;
	font-size:15px;
	color:white;
	transition:0.2s ease;
	cursor:pointer;
	box-shadow: 0px 5px  #bf1b09;
	padding-left:20px;
}
input[type="submit"]:active
{
 box-shadow: 0 1px #bf1b09;
 transform: translateY(4px);	
}


.form2
{
    right:0px;
    padding-top:50px;
    padding-right:30px;
    background-image:url("Full-HD-Music-1080p-Wallpapers.jpg");
	position:absolute;
	height:500px;
	width:320px;
	border: 2px;
	margin-bottom:20px;
	text-align:right;
	
      
}
.social
{   font-family:sans-serif;
	font-size:40px;
	font-weight:3000;
	color:white;
	text-shadow:0px 5px 20px black;
}
button.button
{
	height:40px;
	width: 300px;
	border:none;
	border-radius:4px;
	cursor:pointer;
	transition: 0.2s ease;
	margin-top:60px;
    color:white;
    font-family:arial;

    box-shadow: 0 5px gray;
}
button.button:active
{
	box-shadow: 0 1px gray;
	transform:translate3d(4px);
}
button.facebook
{
   
	background:blue;

}
button.google
{
	
	background:red;
}
button.twitter
{
	
	background:#31c0f9;

}
header
{   margin-top:-22px;
	margin-left:-10px;
	margin-right:-20px;
    background:red;
    padding-left:30px;
	height:50px;
	color:white;
	box-shadow:0 5px #bf1b09;
}
h2
{
	text-shadow:0 5px 5px black;
}
.radio
{
	padding-left:70px;
	color:white;
	font-size:20px;
}
.submit
{
	padding-left:25px;
}
.icon 
{
	position:relative;
	
}
.icon i
{
	position:absolute;
	top:10px;
	left:10px;
}
}
</style>
<script type="text/javascript">
	function formvalidation()
	{
	   var form=document.forms[0];
	   var name=form[0].value;
	   var email=form[1].value;
	   var password=form[2].value;
	   var confirm=form[3].value;
	   var mobile=form[4].value;
	   var checkname=/^[A-Za-z\s]+$/;
	   var mobilec=/^[0-9]+$/;
	   
	   if (name.length<7) 
	   {
	   	alert("please Enter valid Name more than 7 Character");
	   	  return false;
	   }
	    // return false;
	   if (!name.match(checkname)) 
	  	{
	  alert("Name should only contain letters")
       return false;
	  	}
	  if (password.length<7)
	   {
	   	alert("password should be greater than 7 character")
	   	return false;
	   }	
	   if (password!=confirm) 
	   {
	   	alert("please Enter same password that You Enter above")
	   	 return false;
	   }
	   if (mobile.length!=10 ) 
	   {
	   	alert("please Enter 10 digit phone no")
	   	 return false;
	   }
	  if (!mobile.match(mobilec))
	   {
	   	alert("please enter valid mobile no")
	   	return false;
	   }
        
	}
</script>	
	<title>signin</title>
</head>
<body>
<header>
	<u><h2>AV Song</h2></u>
</header>

<div class="signin">

<div class="form1">
	<form method="post"  action="registration.php" onsubmit='return formvalidation()'>
	<h1><u>Sign up</u></h1>
	<div class="icon">
	<input type="text" name="name"  placeholder="Enter Name" required>
	<i class="fa fa-user fa-lg fa-fw"></i>
    </div>
    <div class="icon">
	<input type="email" name="email"  placeholder="Enter Email" required>
	<i class="fa fa-envelope fa-lg fa-fw"></i>
    </div>
	<div class="icon">
	<input type="password" name="password" placeholder="Enter Password" required >
	<i class="fa fa-lock fa-lg fa-fw"></i>
    </div>
	<div class="icon">
	<input type="password" name="confirm password" placeholder="Enter Password again" required >
	<i class="fa fa-lock fa-lg fa-fw"></i>
	</div>
	<div class="icon">
	<input type="text" name="mobile1" placeholder="Enter Mobile no" required><br>
	<i class="fa fa-phone fa-lg fa-fw"></i>
	</div>
	<div class="radio">
    <input type="radio" name="gender" value="male" checked>MALE
	<input type="radio" name="gender" value="female" checked>FEMALE
	<input type="radio" name="gender" value="other" checked>OTHER
    </div>
    
    <br>
    <div class="submit">
	<input type="submit" name='confirm' value="confirm">
    </div>
	</form>
	<p>all ready have account <a href="login.php"> click here</a></p>
	</div>
<div class="form2">
	<form>
		<u><span class="social">Sign in with<br> social network</span></u><br>
		<button class="button facebook">FACEBOOK</button><br>
		<button class="button google">GOOGLE</button><br>
		<button class="button twitter">TWITTER</button>
	</form>
</div>

</div>

</body>
</html>