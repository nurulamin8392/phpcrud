<?php
  $name = $_POST['name'];
  $age = $_POST['age'];
 	$roll = $_POST['roll'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
 	$conn = mysqli_connect('localhost', 'root', '', 'sms');
 	$sql = "INSERT INTO `student`(`id`, `name`, `age`, `roll`, `address`, `phone`) VALUES (null, '$name', '$age', '$roll', '$address', '$phone');";
if(mysqli_query($conn, $sql)){
	header("Location: index.php");
}else{
	echo "not insert";
}
 	
?>