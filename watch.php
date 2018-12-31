<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<button onclick="window.location.href='homepage.php'">home page</button>
<?php
session_start();
if(isset($_GET['id']))
{
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root");
mysqli_select_db($conn,'videos');
$data=$_SESSION['username'].$_SESSION['id'];
$user=str_replace(' ', "_", $data);
$sql="SELECT name,url FROM $user where id='$id'";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
$name=$data['name'];
$url=$data['url'];
echo "<video src='http://localhost/upload/$name' height='500px' controls type=video/mp4></video><br />";

}
else
{
echo "Error";
}
if(mysqli_query($conn,$sql)){

}
else
{
    echo "nothing is uploaded";
}
$sql="SELECT * FROM $user";
$result=mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['id'];
        $name=$row['name'];
        $url=$row['url'];
        echo "<a href='watch.php?id=$id'><video src='http://$url#t=30' height='100px'width='200px'>$name</video></a> ";
    }
}
else
{
    echo "nothing is uploaded";
}
?>
</body>
</html>









