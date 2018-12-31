<?php
session_start();

$conn=mysqli_connect('localhost','root');                                  //connect to data base
if (!$conn) {
    die("connnection failed: " . mysqli_connnect_error());
}
else
{
echo "connnected successfully";
	
} 
$conn2= mysqli_connect('localhost','root');                                  //connect to data base
if (!$conn2) {
    die("connnection failed: " . mysqli_connnect_error());
}
else
{
echo "connnected successfully";
	
}                                               
$name=$_POST['name'];                                                                //data from form signin
$email=$_POST['email'];
$pass=$_POST['password'];
$mobile1=$_POST['mobile1'];
$gender=$_POST['gender'];
$password=md5($pass);


$sql = "CREATE DATABASE signin_data";                                                     //create data base and table
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_select_db($conn,'signin_data');                                                  //using database sigin_data
$sql1 = "CREATE TABLE  signin_info(
id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
mobile_no VARCHAR(255) NOT NULL,
gender VARCHAR(255) DEFAULT 'male',
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql1)) {
    echo "Table signin_info created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$q="SELECT name FROM signin_info WHERE name='$name' && password='$password'";
$result=mysqli_query($conn,$q);
$data=mysqli_fetch_assoc($result);
$num=mysqli_num_rows($result);
if($num==1)
{
echo "<script>
alert('This Name is taken before choose another one');
window.location.href='signin.php';  
</script>";
}
else
{
$q2="SELECT mobile_no FROM signin_info WHERE mobile_no='$mobile1'";	
$result=mysqli_query($conn,$q2);
$num=mysqli_num_rows($result);
if($num>0)
{
echo "<script>
alert('This mobile_no is taken before');
window.location.href='signin.php';  
</script>";	
}
else{
$q3="SELECT email FROM signin_info WHERE email='$email'";	
$result=mysqli_query($conn,$q3);
$num=mysqli_num_rows($result);
if($num>0)
{
echo "<script>
alert('This email is taken before');
window.location.href='signin.php';  
</script>";	
}
else{
	

$sql3="INSERT INTO signin_info(name,email,password,mobile_no,gender) VALUES('$name','$email','$password','$mobile1','$gender')";   
mysqli_query($conn,$sql3);                                                                                 //Inserting data into database
echo "<script>
alert('your accout is created successfully Login Now');
window.location.href='login.php';  
</script>";
}
}
}
?>