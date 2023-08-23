<!DOCTYPE html>
<html lang="en">
<title>Umadevi Trucks and Cranes Service</title>
  <!-- Add Bootstrap Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
 .tab1 { 
            tab-size: 2; 
        } 
.w3-button
{
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.sidepanel {
  height: 500px; /* Specify a height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 0; /* Stay on top */
  down: 20;
  left: 0;
  background-color: w3-green; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */
  margin-bottom: 10%;
}

/* The sidepanel links */
.sidepanel a {
  padding: 4px 4px 4px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  transition: 0.3s;
  down: 10;
  margin-bottom: 4%;

}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  color: white;
}

/* Position and style the close button (top right corner) */
.sidepanel .closebtn {
  position: absolute;
  down: 10;
  right: 25px;
  font-size: 36px;
  margin-bottom: 50px;
}

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 18px;
  cursor: pointer;
  background-color: white;
  color: black;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: green;
}

</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:250px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-100"><b>
  </div>
  <div class="w3-bar-block">
  <img src="1.jpg" height="200px" width="100%"><br>
    <div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"  >&nbsp;</a> 
    <a href="#showcase" onclick="window.location.href='add.php'" class="w3-hover-white">Register New Cargo</a> 
    <a href="#services" onclick="window.location.href='edit.php'" class="w3-hover-white">Update Shipment Info</a> 
    <a href="#designers" onclick="window.location.href='view.php'" class="  w3-hover-white">Track Shippings</a> 
    <a href="#packages" onclick="window.location.href='cb.php'" class="  w3-hover-white">Payments Balance</a> 
    <a href="#contact" onclick="window.location.href='add1.php'" class="w3-hover-white">Add New Vehicle & Company</a>

</div>
<br>
<button class="openbtn" onclick="openNav()">&#9776; Menu</button>
	
  
      </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" id="showcase">
	<img src="head2.png" width="100%"><br>
    <h1 class="w3-xlarge"><b>Welcome to Umadevi Trucks & Cranes Service!</b></h1><br>
    <h3 class="w3-xxlarge w3-text-green"><b>Tamilnadu's No:1 Best Truck & Crane Services</b></h3>
    <hr style="width:50px;border:5px solid green" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding w3-xlarge">
    <div class="w3-half">
	<ul>
      <li>Live Tracking<br><br></li>
	  <li>Service Guarantee<br><br></li>
      <li>500+ Truck Network<br><br></li>
	  <li>20+ City Hubs
	  </ul>
    </div>

    <div class="w3-half w3-xlarge">
	<ul>
	  <li>Instant Pricing<br><br></li>
      <li>Easy Payment<br><br></li>
      <li>Verified Drivers<br><br></li>
      <li>24x7 Support</li>
	  </ul>
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue"><b>Our Excellence</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p style="font-size: 20px">Searching for a best transporter in Madurai? get a Transportation Service booked online with Umadevi Lorry and Crane Services. We are a TamilNadu's no:1 transport services, where we primarily focus on the fast and safe delivery of the goods. </p>
    <p style="font-size: 20px">Covering all modes of transport, we provide you with the services you need to meet your customers' demands. Based on your business need, our team can suggest the most effective and efficient service available. At the heart of our service is our commitment to customers service and quality. With over 60+ years of experience in delivering excellence, our focus has always been solely on not letting our customers down at any situation.<br>
	<br>
	<b><i>Think together. Move together. Grow together.</i></b>
    </p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-amber"><b>Services</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <p style="font-size: 20px">We are able to address your service needs whenever they may arise. Our services are available 24 hours a day, 365 days a year. With well-maintained modern equipment and locations strategically placed across Tamilnadu, we are confident in our ability to help you get your job done.</p>
  </div>
<br>
  <!-- The Features -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3><b>We Have Cranes for All Tasks</b></h3>
          <p class="w3-opacity">We have a fleet of cranes ranging in capacity from 15 to 300 tons.</p>
        
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3><b>High Quality Trucking Services</b></h3>
          <p class="w3-opacity">We keep a fleet of well-maintained vehicles to meet all your trucking needs.</p>

        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3><b>Get an Accurate Quote</b></h3>
          <p class="w3-opacity">Let us give you an accurate online or over the phone quote today!</p>
      
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
 
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-pink"><b>Contact</b></h1>
    <hr style="width:50px;border:5px solid pink" class="w3-round">
   
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Join Us Today!</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>

</body>
</html>
