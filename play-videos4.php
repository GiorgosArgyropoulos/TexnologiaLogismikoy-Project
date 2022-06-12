<!--<link rel="stylesheet" href="style.css"></link>-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

<style>
*{
	padding:0;
	margin:0;
	background-color:#fff;
}
.movies-container{
	display:flex;
	flex-wrap:wrap;
	justufy-content:center;
}
.body{
	background:#020307;
	color:#fff;
}

.box {
	width:300px;
	margin:1rem;
	border-radius:3px;
	box-shadow:0.2px 4px 5px rgba(0,0,0,0.1);
	background-color:#fff;
}
.logo .bx{
	font-size:24px;
	color:var(--main-color);
}

.navbar{
	display:flex;
	column-gap:5rem;
}

.navbar li{
	position:relative;
}

.navbar a{
	font-size:1rem;
	font-weight:500;
	color: var(--bg-color);
}
.navbar a::after{
	content:'';
	width:100%;
	height:2px;
	background:var(--main-color);
	position:absolute;
	bottom:-4px;
	left:0;
	transition:0.4s all linear;
}
.navbar a:hoover::after, 
.navbar .home-active::after{
	width:100%;
}

.comments-box{
	top:50%
	position:absolute;
	width:500px;
}

.comments-box h1{
	font-size:20px;
	margin-bottom:15px;
}

.comments-box input{
	width:100%;
	height:50px;
	padding:0 20px;
	margin-bottom:15px;
}
</style>
<html>
<body>
<center>	
<div class="movies-container">

      <a href="#" class="logo">
	      <i class='bx bx-movie'></i>Free Movies Online
		  </a>
	  <i class="bx bx-menu" id="menu-icon"></i>
	  <ul class ="navbar">
        <a  href="#home" class="home-active">Home</a></li>
	  <li><a class = "mov-link" href="header.php">Movies</a></li>
	  <li><a href="#coming">Coming</a></li>
      <li><a  href="register-admin.php">Register Admin</a></li>
      <li><a  href="seats.php">Buy Tickets </a></li>
	  </ul>
      <li><a class="btn btn-outline danger" href="login.php">Login</a></li>
	  <li>
	  <div class ="search-container">
	  <form>
	  <input type="text" name="" placeholder="Search.."
	  class="input">
	  <button type="submit" class="button" ><i class="bx bx-search"></i></button>
	  </div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/TQUWiXc7arY" title="YouTube video player" frameborder="0" 
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen></iframe>

 <div class="box-img">
                 <h1> Batman v Superman: Dawn of Justice</h1>
 			  <img src="https://www.athinorama.gr/lmnts/events/cinema/10051565/poster.jpg" alt="">
			  <center>Περίληψη</center>
              <p>Στο Batman v Superman: Dawn of Justice, με το φόβο ότι οι ενέργειες του
                 Superman έχουν γίνει ανεξέλεγκτες, ο Batman τα βάζει με τον Superman, τη
				 στιγμή που ο ίδιος ο κόσμος παλεύει να βρει το είδος του ήρωα που
				χρειάζεται πραγματικά. Με τον Batman και τον Superman να πολεμάνε μεταξύ
			τους, μια νέα απειλή, ο Doomsday, θα έρθει στον κόσμο δια χειρός Lex
				Luthor. Θα καταφέρουν ο Superman και ο Batman να
θέσουν κατά μέρος τις διαφορές τους, ώστε μαζί με τη Wonder Woman να
σταματήσουν τον Lex Luthor και τον Doomsday από το να καταστρέψουν
ολοκληρωτικά τη Metropolis;</p>
</div>
<div class="video-container">
			   <div class="video-box">
			<iframe SRC="https://hdvid.tv/embed-pnhbciuumkc3.html"FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGTH=0 SCROLLING
			allowfullscreen="true" WIDTH= 950 HEIGHT=480></iframe>
			</div>
			 </div>

  <div class="comments-box">
			<h1>Comments</h1>
			 <form action="#">
			  <input type="text" name="full_name" placeholder="">
			  <input type="email" name="email" placeholder="">
			  <textarea name="comment" id="" cols="30" row="" placeholder=""></textarea>
                <button type="submit">Submit Comment</button>
			 </form>
			</div>
		</center>	
 
 
 </body>
 </html>