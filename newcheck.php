<?php

session_start();

$conn=mysqli_connect('localhost','root');                                  //connect to data base
// if (!$conn) {
//     die("connnection failed: " . mysqli_connnect_error());
// }
// else
// {
// echo "connnected successfully";
// }


$mobile1=$_POST['mobile1'];
$pass=$_POST['password'];
$password=md5($pass);


mysqli_select_db($conn,'signin_data');


$q="SELECT name,id FROM signin_info WHERE mobile_no='$mobile1' && password='$password'";
$result=mysqli_query($conn,$q);
$data=mysqli_fetch_assoc($result);
$name=$data['name'];
$id=$data['id'];
$num=mysqli_num_rows($result);
echo $num;
if($num==1)
{	
$_SESSION['username']=$name;
$_SESSION['oassword']=
header('LOCATION:homepage.php');
}
else
{
echo "<script>
alert('The Combination of Mobile and password is wrong')
window.location.href='login.php';
</script>";
}