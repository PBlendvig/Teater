<?php
    // Initialize the session
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
 
  

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../header.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="database.js"></script>
  <link rel="icon" href="Billeder/PenisAvatar.jpg" type="image/gif" sizes="16x16">

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


    <form action="action_page.php" method="post" enctype="multipart/form-data">
      <div class="container">
        <h2>Abonnér på vores nyhedsbrev!</h2>
        <p>Månedlige mails der kan afmeldes på et sekund</p>
      </div>
    
      <div class="container" style="background-color:white">
        <input id="name" type="text" placeholder="Navn" name="name">
        <input id="mail" type="email" placeholder="Email" name="mail">
        <label>
          <!-- <input type="checkbox" checked="checked" name="offer"> Modtag også Tilbud! -->
        </label>
      </div>
    
      <div class="container">
        <input onclick="location.href='http://localhost/teater/Forside/index.html';" type="submit" value="Submit">
      </div>
    </form>
</body>

</html> 