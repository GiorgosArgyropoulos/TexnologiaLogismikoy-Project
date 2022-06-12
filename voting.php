<html>
 <head>
      <title>Free movies Online-Voting</title>
	  <div class="voting-box">
	  <link rel="stylesheet" href="style4.css">
 </head>
 <body>
  <div id="form">
           
            <fieldset>
		       <center><h1>Free movies Online-Voting Movie</h1></center>
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
 <label for="vote">Vote</label>
    <input type="text"  class="form-control" id="vote" name="vote">
	</div>
	  <button type="submit" name="submit" class="btn btn-primary"><center>Save Voting</button>
	    	</fieldset>
		</div>
 </body>

</html>

<?php

$host ="localhost";
$user="root";
$password="";
$db="fullmoviesonline";

$conn=mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db) ;


if (isset($_POST['submit'])){
	$firstName =$_POST['firstName'];
	$lastName =$_POST['lastName'];
	$email=$_POST['email'];
	
	$query ="select * from vote  where firstName='".$firstName."' AND lastName='".$lastName."'
    email='".$email."'	";
    $result =mysql_query($sql);
	if(mysql_num_rows($result)==1){
		echo "Vote added";
		exit();
	}else{
		echo "something wrong";
		exit();
	}
}

?>
