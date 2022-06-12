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
 

			  <iframe width="560" height="315" src="https://www.youtube.com/embed/47r8FXYZWNU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			  <div class="box-img">
			  <h1>Sonic 2</h1>
			  		  <img src="https://www.athinorama.gr/Content/ImagesDatabase/p/500x600/crop/both/39/39322194afd049679357e7e5a54500bd.jpg?quality=81&404=default&v=4" alt="">
			  <h1>Περίληψη</h1>
			  <p>Αφού εγκαταστάθηκε στο Γκριν Χιλς, ο Sonic θέλει να αποδείξει πως είναι αληθινός ήρωας. 
			  Η ώρα να δοκιμαστεί φτάνει με την επιστροφή του Δρ. Ρομπότνικ (Τζιμ Κάρεϊ), ο οποίος αναζητάει, μαζί με τον νέο συνεργάτη του, τον Knuckles, ένα σμαράγδι με τη δύναμη να αφανίζει πολιτισμούς. 
			  Ο Sonic ξεκινάει μαζί με τον Tails ένα ταξίδι ανα την υφήλιο, προκειμένου να βρουν το σμαράγδι προτού πέσει στα λάθος χέρια.
			  </p>
			</div>
			<div class="video-container">
			   <div class="video-box">
			   <!--link site hdvid.tv -->
			<iframe SRC="https://hdvid.tv/embed-x3ks0mdl75s1.html"FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGTH=0 SCROLLING
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