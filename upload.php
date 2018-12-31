<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="upload_syntex.php" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="submit" value="upload">
</form>	
<button onclick="window.location.href='homepage.php'">home page</button>
<?php
$conn=mysqli_connect("localhost","root");
mysqli_select_db($conn,'videos');
$data=$_SESSION['username'].$_SESSION['id'];
$user=str_replace(' ', "_", $data);
$sql="SELECT * FROM $user";
$result=mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
while($row=mysqli_fetch_assoc($result))
{
	$id=$row['id'];
	$name=$row['name'];
	$url=$row['url'];
	echo "<a href='watch.php?id=$id'><video src='http://$url#t=30' height='100px'width='200px'>$name</video></a><br> ";
}
}
else
{
	echo "nothing is uploaded";
}
?>
</body>
</html>