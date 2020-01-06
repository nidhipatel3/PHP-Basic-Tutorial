<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
	<h1 align="center">Calculator</h1>
	<table  align="center" cellpadding="10px" cellspacing="10px"> 
		<tr>
			<td>
				<input type="text" name="number1" placeholder="enter number1">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="number2" placeholder="enter number2">
			</td>
		</tr>
		<tr>
			<td>
				<select name="operations">
					<option>select</option>
					<option>add</option>
					<option>subtract</option>
					<option>multiply</option>
					<option>division</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="submit"></button>
			</td>
		</tr>
	</table>
	
</form>
<br/>
<p>answer :</p>

</body>
</html>


<?php

if(isset($_POST['submit']))
{

$num1=$_POST['number1'];
$num2=$_POST['number2'];
$op=$_POST['operations'];

switch ($op) {
	case "select":
		echo "select any methods in list";	
	break;
	
	case "add":
		echo $num1 + $num2;
	break;

	case "subtract":
		echo $num1 - $num2;
	break;

	case "multiply":
		echo $num1 * $num2;
	break;
	
	case "division":
		echo $num1 / $num2;
	break;

	default:
		echo "somethings wrong";
	break;
}

}
?>

