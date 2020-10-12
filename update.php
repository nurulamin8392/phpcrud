<?php
$id = $_GET['id'];
$name = $_POST['name'];
  $age = $_POST['age'];
 	$roll = $_POST['roll'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
 	$conn = mysqli_connect('localhost', 'root', '', 'sms');
 	$sql = "UPDATE `student` SET name= '$name', age ='$age', roll='$roll', address ='$address', phone='$phone' WHERE id = $id";
if(mysqli_query($conn, $sql)){
	header("Location: show.php?id=" .$id);
}else{
	echo "not update";
}
?>