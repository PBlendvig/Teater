<!DOCTYPE html>
<html>
<title>Charlie og  Chokoladefabrikken</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="../Forside/index.html#home" class="w3-bar-item w3-button"><b>Milles</b> Teater</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="../Forside/index.html#projects" class="w3-bar-item w3-button">Forestillinger</a>
      <a href="../OmOs/index.html" class="w3-bar-item w3-button">Find Vej!</a>
      <a href="../StotOs/index.php#contact" class="w3-bar-item w3-button">Kontakt</a>
    </div>
  </div>
</div>


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <h3>Book</h3>
    <h3>forestillingen!</h3>
    <hr>
    <form action="/action_page.php" target="_blank">
      <p><label><i class="fa fa-calendar-check-o"></i> Navn på Bestilling</label></p>
      <input class="w3-input w3-border" type="text" placeholder="Navn" name="CheckIn" required>          
      <p><label><i class="fa fa-calendar-check-o"></i> Email</label></p>
      <input class="w3-input w3-border" type="text" placeholder="Email" name="CheckIn" required>       
      <p><label><i class="fa fa-calendar-o"></i> Dato</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>         
      <p><label><i class="fa fa-male"></i> Antal</label></p>
      <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">              
      <p><button class="w3-button w3-block w3-green w3-left-align" type="submit" onclick="location.href='http://localhost/teater/Forestillinger/kvittering.html';"><i class="fa fa-search w3-margin-right"></i> Køb Billet</button></p>
    </form>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <span class="w3-bar-item">Forestillinger</span>
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white" style="margin-left:260px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>

  <!-- Slideshow Header -->
  <div class="w3-container" id="apartment">
    <h2 class="w3-text-green">Charlie og Chokoladefabrikken</h2>
    <div class="w3-display-container mySlides">
    <img src="Billeder/Charlie3.jpg" style="width:70%;margin-bottom:-6px;margin-left:150px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Plakat</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="Billeder/Charlie2.jpg" style="width:70%;margin-bottom:-6px;margin-left:150px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Forestillings billede</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="Billeder/Charlie1.jpg" style="width:70%;margin-bottom:-6px;margin-left:150px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Skuespillerne</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="Billeder/Charlie4.jpg" style="width:70%;margin-bottom:-6px;margin-left:150px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Blå dame</p>
      </div>
    </div>
  </div>
  <div class="w3-row-padding w3-section">
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="Billeder/Charlie3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="Living room">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="Billeder/Charlie2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)" title="Dining room">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="Billeder/Charlie1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)" title="Bedroom">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="Billeder/Charlie4.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(4)" title="Second Living Room">
    </div>
  </div>
<a>
Charlie i chokoladefabrikken er en bog der er blevet filmatiseret til en meget populær film, Den er nu også blevet lavet til en drama på vores teater


</a>


<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>
