<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1 align="center">Login Form</h1>

<form method="post" align=center action="logincode.php">
	
	<input class="input" type="text" name="username" placeholder="username">
	<br>
	<br>
	<input class="input" type="text" name="password" placeholder="password">
	<br>
	<br>
	<input class="btn" type="submit" name="submit" value="login">

</form>

</body>
</html>

<script type="text/javascript">
	
function validateform() {

var x=document.forms["myform"]["username"].value;
var y=document.forms["myform"]["password"].value;
if(x=="" || y=="")
{
alert("enter name and password");	
return false;
}
}

</script>
