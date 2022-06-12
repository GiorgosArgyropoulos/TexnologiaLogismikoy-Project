
 
 <html>
 <body>
 <link rel="stylesheet" href="style3.css"
<!--<div class="container">
 <div class ="head" style ="text-align:center;">-->
 <div class="registeradmin-box">
 <h1>Register User for Free Movies Online</h1>
 
 <form action="register-admin.php" method="post">
  <div class="form-group">
  <label for="firstName">First Name</label>
  <input type="text" class="form-control" id="firstName" name="firstName">
  </div>
  <div class="form-group">
  <label for="lastName">Last Name</label>
  <input type="text" class="form-control" id="lastName" name="lastName">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text"  class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Password</label>
    <input type="password"  class="form-control" id="password" name="password">
	 <div id="password" class="form-text">We'll never share your password with anyone else.</div>
	 <div id="password" class="form-text">At least 8 characters</div>
  </div>
   <div class="form-group">
    <label for="ConfirmPassword1">Confirm Password</label>
    <input type="password" class="pwd" class="form-control" id="exampleInputPassword1" placeholder="Enter Password again">
  <div class = "form-group form-check">
<input type ="checkbox" class="form-check-input" id ="exampleCheck1">	
 <p> <span class="account"><center>I already have an account<a href="login.php"> </p>
 </div>
 
  <button type="submit" name="submit" class="btn btn-primary"><center>Register</button>
</form>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])){
	$uname =$_POST['uname'];
	$pwd =$_POST['pwd'];
	if($uname){
		$_POST[$pwd];
	}
	$hash = password_hash('$pwd',PASSWORD_BCRYPT);
	
	$query ="INSERT INTO 'registereduser'('firstName','lastName','email','password') 
	VALUES ('$firstName','$lastName','$email','$password')";
    $run =mysqli_query($con,$query);
	if($run){
		echo "admin added";
	}else{
		echo "something wrong";
	}
}

?>