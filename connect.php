<?php
 $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
 $email=$_POST['email'];
 $password=$_POST['password'];

$conn=new mysqli('localhost','root','','fullmoviesonline');
if($conn->connect_error){
	die ('Connection Failed:' .$conn->connect_error);
}else{
	$stmt=$conn->prepare("INSERT INTO registereduser(firstName,lastName,email,password)
	values(?,?,?,?)");
	$stmt->bind_param("sssi",$firstName,$lastName,$email,$password);
	$stmt->execute();
	echo "Registration Successfully";
	$stmt->close();
	$conn->close();
}

 
 ?>