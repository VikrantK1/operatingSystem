<?php
$name=$_POST['name'];
$gender=$_POST['gender'];
echo $name;
echo $gender;
// if (empty($name)) 
// {
// 	header('location:check.html');
// }
// else
// {
// 	echo $name;
// }
// $conn=mysqli_connect('localhost','root'); 
 $conn=mysqli_connect('localhost','root','','check1'); //to select database you can use mysqli_select_db($conn,'check1'); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
echo "Connected successfully";	
}
// $sql = "CREATE DATABASE check1";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
// mysqli_select_db($conn,'check1'); 
// $sql1 = "CREATE TABLE  check2 (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// name VARCHAR(30) NOT NULL,
// gender VARCHAR(50),
// reg_date TIMESTAMP
// )";

// if (mysqli_query($conn, $sql1)) {
//     echo "Table check2 created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }
$sql3="INSERT INTO check2(name,gender) VALUES('$name','$gender')";
if (mysqli_query($conn, $sql3))
 {
    echo "data is inserted successfully";
} 
else {
    echo "Error in data in data insertion: " . mysqli_error($conn);
}

?>