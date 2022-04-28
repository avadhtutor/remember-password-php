<?php session_start();
$e = $_POST['email'];
$p = $_POST['pass'];
$c= mysqli_connect("localhost","root","","login");
$q = mysqli_query($c,"select * from user where email='$e' and password='$p'");
if($r = mysqli_fetch_array($q))
{
	$_SESSION['u']=$e;
	if(isset($_POST['c']))
	{
		setcookie('email',$e,time()+20);
		setcookie('pass',$p,time()+20);
	}
	header("location:welcome.php");
}
else
{
	include "index1.php";
}

?>