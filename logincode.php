<?php
session_start();

include("connection.php");

$msg="";
$select="SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
$res=mysqli_query($con,$select);
$row=mysqli_fetch_array($res);

if(is_array($row))
{
	$_SESSION["id"]=$row['id'];
	$_SESSION["name"]=$row['username'];
}
else
{
	$msg="something went wrong";
}
if(isset($_SESSION["id"]))
{
	header("LOCATION:welcome.php");
}


?>


