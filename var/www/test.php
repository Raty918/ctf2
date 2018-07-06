<?php 
session_start();
include("register.php");
?>


<!DOCTYPE html>
<html>
<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "verdana", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

.w3-bar .w3-button {
    white-space: normal;
    color: #a8a8a8;
}


.w3-display-middle {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	height: 500px;
}

.w3-black, .w3-hover-black:hover {
        color: white !important;
        background-color: #0009 !important;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('img/img2.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("img/img1.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("img/img3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }

}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> STORY</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">STORY</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">COON <span class="w3-hide-small">And</span> Friends</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT COON & friends</h3>
  <p class="w3-center"><em>SUPERHERO LEAGUE</em></p>
  <p>
  We are a group of superheroes assembled by me, the COON. We usually travel in the "Coon Mobile". The team's headquarters are based by the rich Eric Cartman's basement, and uses common household items for equipment, such as televisions and computers with Coon-themed names. We have developped advanced technologies in order to protect everyone.

  During our first mission, ME and my friends have rescued people from a burning building, but the firemen, who were already there, kept us away from the scene, probably an accomplice. Captain Hindsight then arrives, he saw in us a really good potential .. he will probably join us because I am the COON.
  </p>
  
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>The COON</b></p><br>
      <img src="img/photo1.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>
      <br><br>
    There is an animal that lives by night, searches the trashcans and cleans out the garbage.
    <br><br>
    To clean out the trashcan of society I've chosen to become more than a man. I'm the hero this town needs.
    <br><br>
    <b><center> I am ... THE COON !</center></b> 
    <br><br>
    As the world plummets into despair the Coon fights to keep order intact. 
      </p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">I am really good at:</p>
  <p class="w3-wide"></i>Beating bad guys</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:100%">100%</div>
  </div>
  <p class="w3-wide"></i>Leader</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:100%">100%</div>
  </div>
  <p class="w3-wide"></i>Charisme</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:99%">99%</div>
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14+</span><br>
    Partners
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55+</span><br>
    Disasters avoided
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">8904+</span><br>
    Saved Citizens
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150+</span><br>
    Meetings
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">Our biggest moments</h3>
  <p class="w3-center"><em>Here are some of our best actions.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="img/bd/bd1.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The all mighty COON">
    </div>

    <div class="w3-col m3">
      <img src="img/bd/bd2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The great idea of the COON">
    </div>

    <div class="w3-col m3">
      <img src="img/bd/bd3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The betrayers">
    </div>

    <div class="w3-col m3">
      <img src="img/bd/bd4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The beginning">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="img/bd/bd5.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My disciple">
    </div>

    <div class="w3-col m3">
      <img src="img/bd/bd6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Hmmm">
    </div>

    <div class="w3-col m3">
      <img src="img/bd/bd7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Who is Mysterion">
    </div>

    <div class="w3-col m3">
      <img src="img/bd/bd8.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The council">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>




<!-- Container (LOGIN) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <div class="w3-center w3-row w3-padding-32 w3-section">
     <div class="w3-col m10 w3-panel">
     <center><h3>Login</h3></center>
     <br>
     <?php if(isset($_SESSION['login_fail'])): ?>
        <?php if(!$_SESSION['login_fail']): ?>
        <font color="red">Identifiant ou mot de passe incorrect</font><br/>
        <?php $_SESSION['login_fail']=true; ?>
        <?php endif; ?>
     <?php endif; ?>



     <form action="/login.php" method = "post">
       <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
               <input class="w3-input w3-border" type="text" placeholder="username" required name="username">
             </div>
           <div class="w3-half">
                <input class="w3-input w3-border" type="password" placeholder="password" required name="password">
              </div>
           </div>
            <button class="w3-button w3-black w3-right w3-section" type="submit">
         <i class="fa fa-login"></i> LOGIN
       </button>
        </form>
    </div>
    <br><br><br>



<!-- Container (REGISTER) -->
    <div class=" w3-col m10 w3-panel">
	    <h3> Want to join us ? </h3>
	    <br>
	<?php if(isset($_POST['register'])): ?>
	   <?php echo "<b>Thank you for your enrollment!</b> <br/> Ticket number : <font color='green'>" .$row[0]. "</font><br/> Hero : <font color='green'>".$row[1]."</font></br>"; ?>
	<?php endif; ?>

	<br><br><div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>South Park<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: thecoon@southpark.com<br>
      </div>
      <form action="/test.php#contact" method = "post">
        <input class="w3-input w3-border" type="text" name="heroname" placeholder="Name" required name="heroname"><br>
        <input class="w3-input w3-border" type="password" name"psw" placeholder="Enter Password" required name="psw"><br>
	<input class="w3-input w3-border" type="password" name"psw-repeat" placeholder="Repeat Password" required name="psw-repeat"><br>
        <label for="comment">Motivation</label>
        <textarea name="comment" rows="7" cols="70"><?php echo $comment;?></textarea>
	<br>
        
        <button class="w3-button w3-black w3-right w3-section" type="submit" name="register">
          <i class="fa fa-paper-plane"></i> REGISTER
        </button>
      </form>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>


