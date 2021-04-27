<?php include("config.php");
$mail=$_POST['email'];
$pass=$_POST['password'];
if($mail=="" || $pass=="")
{
	header("location:login.php?error=Username or Password is blank..!!");
}
else
{
	$query="select role,pass,id from user where email='".$mail."'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$password=$row['pass'];
	$role=$row['role'];
	$id=$row['id'];
	
	if($pass==$password)
	{
		session_start();
		$_SESSION['email']=$mail;
		$_SESSION['id']=$id;
		if($role=='admin')
		header("location:Admin/index.php");
		else if($role=='vendor')
		header("location:seller/index.php");
		else if($role=='cust')
		header("location:cust/index.php");
	}
	else
	{
		header("location:login.php?error=Username or Password is Wrong..!!");
	}
	mysqli_close($con);

}
?>