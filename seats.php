
<html>
<head>
  <meta charset="UTF-8">
  <meta  http-equiv="X-UA-Compatible" content ="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Free Movies Online-Seat Booking</title>
  </head>
<script src="texnol-logis/script.js"></script>

<style>
@import url ('https://fonts.googleapis.com/css?famili=Lato&display=swap');

*{
	box sizing: border-box;
}

body{
	background-color:#242333;
	color:#fff;
	display:flex;
	flex-direction:column;
	align-items:center;
	justify-content:center;
	height:100vh;
	font-family:"Lato",sans-serif;
	margin:0;
}

.movie-container{
	margin:20px 0;
}

.movie-container select{
	background-color:#fff;
	border:0;
	border-radius:5px;
	font-size:16px;
	margin-left:10px;
	padding:5px 15px 5px 15px;
	-moz-appearance:none;
	-webkit-appearance:none;
	appearance:none;
}

.container{
	perspective:1000px;
	margin-bottom:30px;
}

.seat{
	background-color:#444451;
	height: 12px;
	width:15px;
	margin:3px;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
}
.row{
	display:flex;
}
.seat.selected{
	background-color:green;
}
.seat.sold{
	background-color:#fff;
}

.seat:nth-of-type(2){
	margin-right:18px;
}

.seat:nth-last-of-type(2){
	margin-left:18px;
}

.seat:not(.sold):hover{
	cursor :pointer;
	transoform:scale(1.2);
}

.showcase.seat:not(.sold):hover{
	cursor:default;
	transoform:scale(1);
	}
	
.showcase{
	background:rgba(0,0,0,0.1);
	padding:5px 10px;
	border-radius:5px;
	color:#777;
	list-style-type:none;
	display:flex;
	justify-content:space-between;
}

.showcase li{
	display:flex;
	align-items:center;
	justify-content:center;
	margin:0 10px;
}
.showcase li small {
	margin-left:2px;
}


.screen{
	background-color:#fff;
	height:70px;
	width:100%;
	margin:15px 0;
    transoform:rotate(-45deg);
	box-shadow:0 3px 10px rgba(255,255,255,0.7);
}

p.text{
	margin:5px 0;
}

p.text span {
	color:green;
}
</style>
<body>

 <label>Free Movies Online-Seat Booking </label>
   <div class ="movie-container">
      <label>Select a movie:</label>
	  <select id="movie">
	    <option value="0">Movies</option>
	   <option value ="1">Doctor Strange in the Multiverse of Madness(7,50€)</option>
	   	   <option value ="2">Everything Everywhere All at Once(7,50€)</option>
	   <option value ="3">The Bad Guys(7,50€)</option>
	   <option value ="4">Sonic the Hedgehog 2(7,50€)</option>
	   <option value ="5">Firestarter(7,50€)</option>
	  </select>
	</div>
	<ul class="showcase">
	 <li>
	 <div class ="seat"></div>
	 <small>Available</small>
	 </li>
	 <li>
	 <div class="seat selected"></div>
	     <small>Selected</small>
		 </li>
	 <li>
	 <div class ="seat sold"></div>
	 <small>Sold</small>
	 </li>
	 </ul>
	 <div class="container">
	   <div class ="screen"></div>
	   
	   <div class="row">
	    <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
	    </div>
		
		<div class="row">
	    <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat sold"></div>
		 <div class="seat sold"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat sold"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
	    </div>
		
		<div class="row">
	    <div class="seat sold"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat sold"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat sold"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
	    </div>
		
		<div class="row">
	    <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat sold"></div>
		 <div class="seat sold"></div>
		 <div class="seat"></div>
		 <div class="seat sold"></div>
		 <div class="seat sold"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
	    </div>
		
		<div class="row">
	    <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat "></div>
		 <div class="seat"></div>
		 <div class="seat"></div>
		 <div class="seat sold"></div>
		 <div class="seat sold"></div>
		 <div class="seat sold"></div>
	    </div>
	  </div>
	  
	  <p class ="text">
	    You have selected <span id="count">0 </span>seat for a price of RS.
		<span id = "total">0</span><br>
		<center><input type="submit" name="" value="Buy Tickets"></center>
	  </p>
	  <script src="script.js"></script>
</body>
</html>