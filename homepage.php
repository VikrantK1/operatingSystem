<?php
session_start();
 if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><center><U>HOME PAGE</U></center></h1>
<h2>Welcome <?php echo $_SESSION['username']; ?> </h2>
<a href="upload.php">upload file</a>
<a href="logout.php">logout</a>
<?php
$conn=mysqli_connect("localhost","root");
mysqli_select_db($conn,'videos');
$sql="SELECT * FROM allvideos";
$result=mysqli_query($conn,$sql);
if (mysqli_query($conn,$sql)) {
while($row=mysqli_fetch_assoc($result))
{
	$id=$row['id'];
	$name=$row['name'];
	$url=$row['url'];
	$arr=explode(' ', $name);
	$name3=$arr[0].$arr[1].$arr[2].$arr[3];
	echo "<a href='watch2.php?id=$id'><video src='http://$url#t=30' height='100px'width='200px'></video></a> ";
    echo $id;
}
}
else
{
	echo "Nothing is Uploaded yet";
}
?>
</body>
</html>