<!DOCTYPE html>
<html>
<head>
 <title>Admin - Free Movies Online</title>
 <!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
<link rel="stylesheet" href="style.css">
 <!-- Link Swiper's CSS -->
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<link rel ="stylesheet" href="main.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

.search-container{
	width:100%;
	height:0;
	background:#fff;
	border:2px solid var(--main-color);
	border-radius:50px;
	position:relative;

}
.input{
	font-size:15px;
	outline:none;
	border:none;
}
.button{
	position:absolute;
	background:linear-gradient(90deg,black);
	color:black;
	border-radius:50%;
	font-size:15px;
}
</style>
</head>
<body>

  <header>
      <a href="#" class="logo">
	      <i class='bx bx-movie'></i>Free Movies Online
		  </a>
	  <i class="bx bx-menu" id="menu-icon"></i>
	  <ul class ="navbar">
        <a  href="#home" class="home-active">Home</a></li>
	  <li><a class = "mov-link" href="#movies">Movies</a></li>
	  <li><a href="#coming">Coming</a></li>
      <li><a  href="register-admin.php">Register Admin</a></li>
      <li><a  href="seats.php">Buy Tickets </a></li>
	  </ul>
      <li><a class="btn btn-outline danger" href="login.php">Logout</a></li>
	  <li>
	  <div class ="search-container">
	  <form>
	  <input type="text" name="" placeholder="Search.."
	  class="input">
	  <button type="submit" class="button" ><i class="bx bx-search"></i></button>
	  </div>
	 <!-- <div class="search"> 
	  <div class="icon"></div>
	     <div class="input"></div>
	  <a href="style.css"><i class="fa-solid fa-magnifying-glass"></i></a>
	  <!--<a href="#" class="btn">Sign In</a>-->
	  </header>
	  <section class="home swiper" id ="home">
	  <!--Movie 1-->
	      <div class="swiper-wrapper">
        <div class="swiper-slide container">
		<img src ="https://m.media-amazon.com/images/M/MV5BZWMyYzFjYTYtNTRjYi00OGExLWE2YzgtOGRmYjAxZTU3NzBiXkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_FMjpg_UX1000_.jpg" alt="">
		  <div class="home-text">
		      <span>Marvel Universe</span>
			  <h1>Spiderman:<br>No Way Home</h1>
			  <p>Η ταυτότητά του Spider-Man αποκαλύπτεται, φέρνοντας τις ευθύνες του ως Super Hero σε πόλεμο με την κανονικότητα στη ζωή του και θέτοντας αυτούς που αγαπά περισσότερο σε κίνδυνο. 
			  Όταν απευθύνεται στον Δρ. Strange να τον βοηθήσει με την αποκατάσταση του μυστικού του,
			  το ξόρκι ανοίγει μια πόρτα στον κόσμο που επιτρέπει να ελευθερωθούν οι πιο δυνατοί εχθροί που έχει αντιμετωπίσει ποτέ ο Spider-Man σε κάθε σύμπαν. 
			  Τώρα, ο Πίτερ πρέπει να ξεπεράσει την πιο μεγάλη πρόκληση, που θα αλλάξει για πάντα το δικό του αλλά και το μέλλον του Πολυσύμπαντος.</p>
			  <span>Movie Rating on IMDB:8.5/10</span>
			  <a href="#" class="btn">Vote Now</a>
			  <a href="play-videos2.php" class ="play">
			       <i class ='bx bx-play'></i>
			  </a>
			</div>    
		</div>
		<!--Movie 2 -->
		   <div class="swiper-slide container">
		<img src ="https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_.jpg" alt="">
		  <div class="home-text">
		      <span>Marvel Universe</span>
			  <h1>Avengers:<br> Infinity War</h1>
			  <p>Το Avengers: Infinity War συνεχίζει μετά τα τραγικά γεγονότα για την ομάδα, τα οποία διαδραματίστηκαν στο Captain America: Civil War. 
			  Οι Avengers τώρα θα ενώσουν δυνάμεις με τους Guardians of the Galaxy με σκοπό να πολεμήσουν τον Thanos τον νέο υπέρτατο εχθρό. 
			  Ο Thanos θα προσπαθήσει να συσσωρεύσει τις Infinity Stones σε ένα γάντι και οι Avengers θα κληθούν να αντιμετωπίσουν την κυριαρχία του στο διάστημα, 
			  τον χρόνο αλλά και την ίδια την πραγματικότητα!</p>
			  <span>Movie Rating on IMDB:8,4/10</span>
			  <a href="#" class="btn">Vote Now</a>
			  <a href="play-videos.php" class ="play">
			       <i class ='bx bx-play'></i>
			  </a>
			  </div>
			    </div>
				<!-- Movie 3 -->
				<div class="swiper-slide container">
		<img src ="https://m.media-amazon.com/images/M/MV5BMzVlMmY2NTctODgwOC00NDMzLWEzMWYtM2RiYmIyNTNhMTI0XkEyXkFqcGdeQXVyNTAzNzgwNTg@._V1_.jpg" alt="">
		  <div class="home-text">
		     
			  <h1>The <br> Northman</h1>
			  <p>Ένας πολύ νεαρός πρίγκηπας είναι στα πρόθυρα της ηλικίας που θα γίνει άνδρας. <br>
			  Ενώ ετοιμάζεται να καθίσει στο θρόνο του πατέρα του, η μοίρα του σφραγίζεται ανεξίτηλα από μια αιματηρή και αναίτια σφαγή: <br> ο πατέρας του δολοφονείται βάναυσα από τον θείο του, ο οποίος μάλιστα απαγάγει τη μητέρα του μικρού αγοριού.
			  Φεύγοντας από το Βασίλειο του νησιού με μια βάρκα, το παιδί ορκίζεται να πάρει εκδίκηση. <br>
			  Δύο δεκαετίες αργότερα, ο ήρωας έχει γίνει ένας ατρόμητος πολεμιστής που εισβάλλει σε χωριά και τα λεηλατεί,<br>μέχρι που μια απόκοσμη μάντισσα του θυμίζει τον αιώνιο όρκο του, ότι οφείλει να εκδικηθεί για τον άδικο χαμό του πατέρα του, να σώσει τη μητέρα του και να σκοτώσει τον άπληστο θείο του.</p>
                <span>Movie Rating on IMDB:7,4/10</span>			 
			 <a href="#" class="btn">Vote Now</a>
			  <a href="play-videos3.php" class ="play">
			       <i class ='bx bx-play'></i>
			  </a>
			  </div>
			    </div>
      </div>
	  </section>
	  <!--Movies -->
	   <section class="movies" id="movies">
	       <h2 class="heading">More Movies</h2>
		   <div class="movies-container">
		      <div class="box">
			  <div class="box-img">
			  <img src="https://www.athinorama.gr/lmnts/events/cinema/10051565/poster.jpg" alt="">
			</div>
			<h3>Batman Vs Superman</h3>
			<span>120 min |Action</span>
		   </div>
		    <div class="box">
			  <div class="box-img">
			  <img src="https://www.athinorama.gr/Content/ImagesDatabase/p/500x600/crop/both/39/39322194afd049679357e7e5a54500bd.jpg?quality=81&404=default&v=4" alt="">
			</div>
			<h3>Sonic 2</h3>
			<span>122 min |Action,Family</span>
		   </div>
		   <div class="box">
		      <div class="box-img">
			  <img src="https://www.athinorama.gr/lmnts/events/cinema/10063026/poster.jpg">
		   </div>
		   <h3>Aquaman</h3>
		   <span>143 min|Sci-fi,Adventure</span>
		   </div>
		    <div class="box">
		      <div class="box-img">
			  <img src="https://www.villagecinemas.gr/ImageGen.ashx?image=/media/1773126/poster.jpg&width=254&Constrain=true">
		   </div>
		   <h3>The Batman</h3>
		   <span>176 min|Τhriller,Adventure</span>
		   </div>
		        <div class="box">
		      <div class="box-img">
			  <img src="https://www.athinorama.gr/lmnts/events/cinema/10059446/poster.jpg">
		   </div>
		   <h3>Black Panther</h3>
		   <span>120 min|Adventure</span>
		   </div>
		    <div class="box">
		      <div class="box-img">
			  <img src="https://www.athinorama.gr/lmnts/events/cinema/10044376/poster.jpg">
		   </div>
		   <h3>John Wick</h3>
		   <span>101 min|Τhriller,Adventure</span>
		   </div>
		    <div class="box">
		      <div class="box-img">
			  <img src="https://www.athinorama.gr/lmnts/events/cinema/1006015/poster.jpg?w=500&h=600&mode=pad&bgcolor=191919">
		   </div>
		   <h3>The Matrix</h3>
		   <span>136 min|<br>Sci-fi,Adventure</span>
		   </div>
		    <div class="box">
		      <div class="box-img">
			  <img src="https://www.magiamovietone.gr/wp-content/uploads/2022/01/lost-city-poster.jpg">
		   </div>
		   <h3>The Lost City</h3>
		   <span>112min|<br>Action,Romance,<br>Comedy</span>
		   </div>
		   <div class="box">
		      <div class="box-img">
		   <img src="https://m.media-amazon.com/images/M/MV5BMWEwNjhkYzYtNjgzYy00YTY2LThjYWYtYzViMGJkZTI4Y2MyXkEyXkFqcGdeQXVyNTM0OTY1OQ@@._V1_FMjpg_UX1000_.jpg">
		   </div>
		   <h3>Uncharted</h3>
		   <span>172 min|<br>Adventure,Action</span>
		   </div>
		    <div class="box">
		      <div class="box-img">
		   <img src="https://m.media-amazon.com/images/M/MV5BYWQ2NzQ1NjktMzNkNS00MGY1LTgwMmMtYTllYTI5YzNmMmE0XkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg">
		   </div>
		   <h3>No Time to Die</h3>
		   <span>163 min|<br>Adventure,Thriller</span>
		   </div>
		    </section>
			<!--Coming-->
			<section class ="coming-movies" id="coming">
			   <h2 class="heading">Coming Soon</h2>
			   <div class="movies-container">
			   
			      <div class="box">
			  <div class="box-img">
			  <img src="https://www.villagecinemas.gr/ImageGen.ashx?image=/media/1780888/poster.jpg&width=254&Constrain=true">
			</div>
			<h3>Doctor Strange in the Multiverse of Madness</h3>
			<span>126 min|Action,Sci-fi</span>
		   </div>
		    <div class="box">
			  <div class="box-img">
			  <img src="https://www.athinorama.gr/Content/ImagesDatabase/67/6799f54005284ab0bdcc22e1827b616d.jpg">
			</div>
			<h3>The Bad Guys</h3>
			<span>100 min|Animation</span>
		   </div>
		   <div class="box">
		      <div class="box-img">
			  <img src="https://dvvy6louqcr7j.cloudfront.net/vista/HO00013523/heroPoster/Firestarter.png">
		   </div>
		   <h3>Firestarter</h3>
		   <span>94min|Thiller</span>
		   </div>
		    <div class="box">
		      <div class="box-img">
			  <img src="https://m.media-amazon.com/images/M/MV5BMmIwZDMyYWUtNTU0ZS00ODJhLTg2ZmEtMTk5ZmYzODcxODYxXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_FMjpg_UX1000_.jpg">
		   </div>
		   <h3>Top Gun:Maverick</h3>
		   <span>131 min|Drama,Adventure</span>
		   </div>
		        <div class="box">
		      <div class="box-img">
			  <img src="https://www.athinorama.gr/Content/ImagesDatabase/33/3357f9f3efd849068e3149584aa7361d.jpg">
		   </div>
		   <h3>Downton Abbey:A New Era</h3>
		   <span>125 min|Drama</span>
		   </div>
		    <div class="box">
		      <div class="box-img">
			  <img src="https://www.villagecinemas.gr/ImageGen.ashx?image=/media/1780874/poster.jpg&width=254&Constrain=true">
		   </div>
		   <h3>Fantastic Beasts: The Secrets of Dumbledore</h3>
		   <span>143 min|Adventure</span>
		   </div>
		    <div class="box">
		      <div class="box-img">
			  <img src="https://m.media-amazon.com/images/M/MV5BZGQ2ZDNiMjgtMTNhNS00MjUxLWFkYTMtYTI1OTE0MmQ2MmJkXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg">
		   </div>
		   <h3>Men</h3>
		   <span>100 min|Horror</span>
		   </div>
			   </div>
			   </section>
	    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Link To Custom JS -->
     <script src="main.js"></script>
</body>
</html>