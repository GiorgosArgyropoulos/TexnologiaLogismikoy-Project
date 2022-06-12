
<head>
<title>Login to Free Movies Online</title>
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<link rel="stylesheet" href="style2.css">

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container">
 <div class ="forms" style ="text-align:center;">
      <div class="form login">
 <span class="title"><h1>Login To Free Movies Online</h1></span>
 <tr>
		<td><select>
	   <option value="">Select</option>
	   <option value="Register User" name="gender" required >Admin</option>
 	   <option value="User" name="gender" required >User</option>
	   </select></td>
	   </tr>
    <form action="#">
	   <div class="input-field">
			<input type="text"  placeholder="Enter your email" required>
			<i class="fa-solid fa-user"></i>
  </div>
   <div class="input-field">
    <input type="password" placeholder="Enter your password" required>
	<i class="fas-solid fa-lock"></i>
	<i class="fa-solid fa-eye"></i>
    <div id="passwordHelp" class="form-text">We'll never share your password with anyone else.</div>
  </div>
  
   <div class ="checkbox-text">
     <div class="checkbox-content">
     <input type ="checkbox" class="form-check-input" id ="exampleCheck1">
	 <label class "form-check-label" for="exampleCheck1">Remember me </label>
	 </div>
	 <a href="#" class="text">Forgot password?</a>
	 </div>
	 <div class ="input-field button">
  <button type="submit" class="btn btn-primary" href="header.php">Login Now</button>
  <p><span class="account"><center>Not have an account?<a href="register-admin.php">Register Here</a></center></p>
</form>

</div>
 <?php
              if (isset($_POST['Log In'])){
		     $email=$_POST['email'];
			 $password=$_POST['password'];
	      
		     if($email&&$password){ 
		  //connect with database
		  mysql_connect("localhost","root","");
		  mysql_select_db("fullmoviesonline");
		  
		  $result=mysql_query("select * from registereduser where email='$email' and password='$password'")
		         or die("Failed to query database".mysql_error());
		   $row = mysql_fetch_array($result);
		   if($row['email']==$email && $row['password']==$password){
			   echo "Login success!!" .$row['email'];
		   }else{
			   echo "failed Login";
		   }
			 }
			  }
		 ?>
