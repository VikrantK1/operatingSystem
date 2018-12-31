<?php
session_start();
$conn=mysqli_connect("localhost","root");
$sql12="CREATE DATABASE videos";
mysqli_query($conn,$sql12);
mysqli_select_db($conn,'videos');
if (!file_exists('upload')) {
    mkdir('upload', 0777, true);
}
$iddb=$_SESSION['id'];
$data=$_SESSION['username'].$_SESSION['id'];
$user=str_replace(' ', "_", $data);
$sql="SELECT * FROM $user WHERE id=$iddb";
echo $user;
$sql4="CREATE TABLE allvideos(
id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(255) NOT NULL,
url VARCHAR(255) NOT NULL,
upload_time TIMESTAMP
)";
mysqli_query($conn,$sql4);
if(mysqli_query($conn,$sql))
{
	echo "it is running";
}
else
{
	echo "error";
}
if(mysqli_query($conn,$sql))
{
	if (isset($_POST['submit']))
{
	$name=$_FILES['file'] ['name'];
	$temp=$_FILES['file'] ['tmp_name'];
	$ext= end(explode('.', $name));
	if ($ext!="mp4") {
	 	echo "<script>alert('file should be in mp4 format');
        window.location.href='upload.php';
		</script>";
	 }
	 else
	 { 
	$sql2="SELECT name FROM allvideos WHERE name='$name'";
	$result=mysqli_query($conn,$sql2);
	$data=mysqli_fetch_assoc($result);
	echo $data['name'];
	$num=mysqli_num_rows($result);
	echo $num;
    if($num>0)
	{
		echo "<script>alert('this file is uploaded before');
        window.location.href='upload.php';
		</script>";
		
     }
	
	else
	{   
		move_uploaded_file($temp,"upload/".$name);
		$url="localhost/upload/$name";
		$sql6="INSERT INTO $user(NAME,URL)values('$name','$url')";
		$sql7="INSERT INTO allvideos(NAME,URL)values('$name','$url')";
        mysqli_query($conn,$sql6);
        mysqli_query($conn,$sql7);
       
		echo "<script>alert('uploaded done');
        window.location.href='upload.php';
		</script>";
		
	}
}
}
}
else
{
$sql3="CREATE TABLE $user(
id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(255) NOT NULL,
url VARCHAR(255) NOT NULL,
upload_time TIMESTAMP
)";
mysqli_query($conn,$sql3);
if (isset($_POST['submit']))
{
	$name=$_FILES['file'] ['name'];
	$temp=$_FILES['file'] ['tmp_name'];
	 $ext= end(explode('.', $name));
	if ($ext!="mp4") {
	 	echo "<script>alert('this file is not supported');
        window.location.href='upload.php';
		</script>";
	 } 
	else 
	{
	$sql2="SELECT name FROM allvideos WHERE name='$name'";

	$result=mysqli_query($conn,$sql2);
	$data=mysqli_fetch_assoc($result);
	echo $data['name'];
	$num=mysqli_num_rows($result);
	echo $num;
    if($num>0)
	{
		echo "<script>alert('this file is uploaded before');
        window.location.href='upload.php';
		</script>";
		

	}
	else
	{   
		move_uploaded_file($temp,"upload/".$name);
		$url="localhost/upload/$name";
		$sql6="INSERT INTO $user(name,url)values('$name','$url')";
		$sql7="INSERT INTO allvideos(name,url)values('$name','$url')";
        mysqli_query($conn,$sql6);
        mysqli_query($conn,$sql7);
        echo "done";
		echo "<script>alert('uploaded done');
        window.location.href='upload.php';
		</script>";
		
	}
}
}
}


?>