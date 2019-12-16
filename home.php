<?php

session_start();
//without login you can't enter the homepage
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>


<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="STYLE.css">
    <link rel="stylesheet" type="text/css"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>
<body>
	<div class = "container">
	<a href="logout.php"> LOGOUT </a>

	



	<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>



	</div>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #b2fcff;
  font-style: normal;
  font-size: 18px;
  font-family:verdana;
}

li {
  float: left;
}

li a, .dropbtn, .dropbtn0 {
  display: inline-block;
  color: #200f21;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
li a:hover, .dropdown0:hover .dropbtn0 {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}
li.dropdown0 {
  display: inline-block;
}
.dropdown-content,.dropdown-content0  {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content0 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown-content0 a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown0:hover .dropdown-content0 {
  display: block;
}
.music
{
  font-style: oblique;
  color: #ffd739;
  font-size: 100px;
  background-color: #000000;
  text-align : center;
}
.container {
    position: relative;
    width: 100%;
    max-width: 400px;
}

.container img {
    width: 100%;
    height: auto;
}

.container .btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: turquoise;
    color: white;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.container .btn:hover {
    background-color: black;
}

* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 25%;
    padding: 5px;
}
/* Clearfix (clear floats) */

.row::after {
    content: "";
    clear: both;
    display: table;
}
.names
{
    color: #04f2d5;
    text-align : center;
    font-style: oblique;
    font-size: 25px;
}
#star
{
  color : #feed30;
}
.welcome
{
  color:#feed30;
  text-align: center;
  font-size: 100px;

}

audio:hover, audio:focus, audio:active
{
  -webkit-box-shadow: 15px 15px 20px rgba(0,0, 0, 1.0);
  -moz-box-shadow: 15px 15px 20px rgba(0,0, 0, 1.0);
  box-shadow: 15px 15px 20px rgba(10,0, 0, 1.0);
  -webkit-transform: scale(1.05);
  -moz-transform: scale(1.05);
  transform: scale(1.05);
}


audio
{
  -webkit-transition:all 0.5s linear;
  -moz-transition:all 0.5s linear;
  -o-transition:all 0.5s linear;
  transition:all 0.5s linear;
  -moz-box-shadow: 2px 2px 4px 0px #730000;
  -webkit-box-shadow:  2px 2px 4px 0px #730000;
  box-shadow: 2px 2px 4px 0px #730000;
  -moz-border-radius:7px 7px 7px 7px ;
  -webkit-border-radius:7px 7px 7px 7px ;
  border-radius:7px 7px 7px 7px ;
}
</style>
<body style=" background-color : black;">

<ul>
  <li><a href="#">Home</a></li>
  <li class="dropdown0">
    <a href="javascript:void(0)" class="dropbtn0">Type</a>
    <div class="dropdown-content0">
      <a href="Devotional.html">Devotional</a>
      <a href="Hip Hop.html">Hip-Hop</a>
      <a href="Emotional.html">Emotional</a>

    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Languages</a>
    <div class="dropdown-content">
      <a href="English.html">English</a>
      <a href="Hindi.html">Hindi</a>
      <a href="Kannada.html">Kannada</a>

    </div>
  </li>
  <li><a href="Drum.html">Play Drum</a></li>
  <li><a href="About Us.html">About Us</a></li>
  <li><a href="snake.html">GAME</a></li>


</ul>
<i class = "welcome">💝🎧Welcome To Musico🎤🎶</i>
<div class="row">
    <div class="column">
        <div class="container">
            <img src="Home Page\gerua.jpg" alt="Snow" style="width:100%">



        </div>
        <figure>

            <p class = "names">Gerua <br>ARJIT SINGH <br>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>

              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
            </p>
            <audio controls >
              <source src="Home Page\01 - Gerua - DownloadMing.SE.mp3" type="audio/ogg">
          </audio>
    </figure>
    </div>
    <div class="column">
        <div class="container">
            <img src="Home Page\adam.jpg" alt="Snow" style="width:100%">



        </div>
        <figure>

            <p class = "names">No One Else Like You <br>Justin Bieber <br>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>

              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
            </p>
            <audio controls >
              <source src="Home Page\No One Else Like You - Adam Levine.mp3" type="audio/ogg">
          </audio>
    </figure>
    </div>
    <div class="column">
        <div class="container">
            <img src="Home Page\every.jpg" alt="Snow" style="width:100%">



        </div>
        <figure>

            <p class = "names">Every Night In My Dreams <br>Ceine Dion <br>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>

              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
            </p>
            <audio controls >
              <source src="Home Page\Every Night In My Dreams (Titanic) - Ceine Dion [www.ErosMp3.com] - 320 Kbps.mp3" type="audio/ogg">
          </audio>
    </figure>
    </div>
    <div class="column">
        <div class="container">
            <img src="Home Page\swag.jpg" alt="Snow" style="width:100%">



        </div>
        <figure>

            <p class = "names">Swag Se Swagat <br>Rithesh <br>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>

              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
            </p>
            <audio controls >
              <source src="Home Page\Swag Se Swagat (128 Kbps).mp3" type="audio/ogg">
          </audio>
    </figure>
    </div>
    <div class="column">
        <div class="container">
            <img src="Home Page\alan.jpg" alt="Snow" style="width:100%">



        </div>
        <figure>

            <p class = "names">Sing_Me_to_Sleep <br>Alan_Walker <br>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>

              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
            </p>
            <audio controls >
              <source src="Home Page\Alan_Walker_Sing_Me_to_Sleep_Original_Mix_(mp3co.biz).mp3" type="audio/ogg">
          </audio>
    </figure>
    </div>
    <div class="column">
        <div class="container">
            <img src="Home Page\salam.jpg" alt="Snow" style="width:100%">



        </div>
        <figure>

            <p class = "names">Salaam Rocky Bhai <br>Arjun J <br>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>

              <i  id = "star" class="fa fa-star" aria-hidden="true"></i>
            </p>
            <audio controls >
              <source src="Home Page\Salaam Rocky Bhai [320 Kbps].mp3" type="audio/ogg">
          </audio>
    </figure>
    </div>


    <div class="column">
        <div class="container">
          <section>
            <img class="mySlides" src="Home Page\pics\slide1.jpg"
            style="width:200%">
            <img class="mySlides" src="Home Page\pics\slide4.jpg"
            style="width:200%">
            <img class="mySlides" src="Home Page\pics\slide5.jpg"
            style="width:200%">
            <img class="mySlides" src="Home Page\pics\slide6.jpg"
            style="width:200%">
            <img class="mySlides" src="Home Page\pics\slide7.jpg"
            style="width:200%">
          </section>



        </div>

    </div>

</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>

</html>
