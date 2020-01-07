<?php

include_once 'connection.php';
//Indexed array
$array = array("deepika","ranbir","akhil","disha");

echo $array['2']; 
echo "<br>";

print_r($array);

echo "<br>";

$data = array("nirmi");
array_push($data, "deepika",26);
//$data[] = "deepika";
print_r($data);

echo "<br>";

//using array in database
$sql = "SELECT * FROM user";
$res=mysqli_query($con,$sql);
$dataa = array();
if(mysqli_num_rows($res) > 0)
{
	while ($row = mysqli_fetch_assoc($res)) {
		$dataa[] =$row;

		
	}
}

foreach ($dataa as $d) {
	echo $d['username'] . " ";
}

echo "<br>";

//Associative array
$data = array("username"=>"avani","age"=>28);
echo $data["username"];

echo "<br>";
$data["username"] = "reena";
$data["email"] = "reena@gmail.com";

print_r($data);

echo "<br>";
//Multidimensional array

$data = array(
				array(1,2,3),
				"abc",
				"xyz",
				"pqr");
	//print_r($data);
	echo $data[2][2];
?>