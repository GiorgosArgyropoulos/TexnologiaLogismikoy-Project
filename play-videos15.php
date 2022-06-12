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
 

 			  <iframe width="560" height="315" src="https://www.youtube.com/embed/59MJfJPP5eo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			  <div class="box-img">
			  <h1>The Bad Guys</h1>
			  <img src="https://www.athinorama.gr/Content/ImagesDatabase/67/6799f54005284ab0bdcc22e1827b616d.jpg">

			  <center>Περίληψη</center>
			  <p>Δεν έχει υπάρξει ποτέ άλλη παρέα πέντε φίλων τόσο κακόφημη όσο αυτή των «Κακών Παιδιών» - ο τολμηρός πορτοφολάς Mr. Wolf, ο έμπειρος διαρρήκτης χρηματοκιβωτίων Mr. Snake, ο χαλαρός άρχοντας της μεταμφίεσης Mr. Shark, ο ευέξαπτος νταής Mr. Piranha και η ετοιμόλογη χάκερ Ms. Tarantula.
			  Αλλά όταν ύστερα από αμέτρητες ληστείες μέσα στα χρόνια και παρουσία στη λίστα με τους πιο καταζητούμενους κακοποιούς η συμμορία τελικά συλλαμβάνεται, ο Mr. Wolf κάνει μια συμφωνία (την οποία δεν έχει πρόσθεση να τηρήσει) προκειμένου να γλυτώσουν τη φυλακή: Τα Κακά Παιδιά θα γίνουν καλά! 
			  Υπό την κηδεμονία του μέντορά τους, του καθηγητή Marmalade, ένα αλαζονικό (αλλά αξιολάτρευτο!) πειραματόζωο, τα Κακά Παιδιά ξεκινούν να ξεγελάσουν τον κόσμο προσποιούμενα πως έχουν μεταμορφωθεί!
			  Στην πορεία, ωστόσο, ο Mr. Wolf αρχίζει και συνειδητοποιεί ότι πράττοντας το καλό, του προσφέρει αυτό που πάντα αποζητούσε: την αποδοχή των άλλων. 
			  Έτσι, λοιπόν, όταν ένας νέος κακός απειλεί την πόλη, μπορεί ο Mr. Wolf να πείσει την υπόλοιπη συμμορία να γίνουν…. Καλά Παιδιά;
			  </p>
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