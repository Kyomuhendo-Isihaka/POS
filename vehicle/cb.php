<!DOCTYPE html>
<html lang="en">
<title>Payments Balance</title>
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
.button:hover 
{
  background-color: black;
}
th
{
	color:white;
}
table
{
	padding: 10px;
	
}
.button:hover 
{
  background-color: black;
}
button
{
  background-color: #008000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button:hover 
{
  background-color: black;
}
button
{
  background-color: #008000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.bg {
  background-image: url(""headd.png"");

  height: 50%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-100"><b>
  </div>
  
  <div class="w3-bar-block">
  <img src="1.jpg" align="middle" height="150" width="200"><br>
  <a href="#" onclick="window.location.href='index.php'" class="w3-bar-item w3-button  w3-hover-white">Home</a> 
    <a href="#showcase" onclick="window.location.href='add.php'"class="w3-bar-item w3-button   w3-hover-white">Register New Cargo</a> 
    <a href="#services" onclick="window.location.href='edit.php'"class="w3-bar-item w3-button w3-hover-white">Update Shipment Info</a> 
    <a href="#designers" onclick="window.location.href='view.php'"class="w3-bar-item w3-button w3-hover-white">Track Shippings</a> 
    <a href="#packages" onclick="window.location.href='cb.php'"class="w3-bar-item w3-button w3-white w3-border w3-hover-white">Payments Balance</a> 
    <a href="#contact" onclick="window.location.href='add1.php'"class="w3-bar-item w3-button  w3-hover-white">Add New Vehicle & Company</a>
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
    <h1 class="w3-xxlarge"><b>Welcome to Umadevi Trucks & Cranes Service!</b></h1><br>
 </div>
 <br>

 <div class="container" align="left">
  <form action="updatebal.php" method="post">
  <h3 class="w3-xxlarge w3-text-black"><b>Payments Balance</b></h3>
    <hr style="width:340px;border:5px solid deeppink" class="w3-round">
	<br>
  <br>
  <table class="table" style="width:950px;" align="left">
    <thead>
      <tr bgcolor="darkolivegreen">
        <th>Company Name</th>
        <th>Balance Amount</th>
      </tr>
	  </thead>
	  </tbody>
	  <?php
$conn=mysqli_connect("localhost","root","","vehicle_db");
	$sqli = "SELECT* FROM company";
    $resulti = mysqli_query($conn, $sqli);
	$var=0;
	

    while($rowi = mysqli_fetch_assoc($resulti)) {
		if($var==0)
		{			
	  echo "<tr >";
	  echo "<td>".$rowi['company']."</td><td>" . $rowi['balance']. "</td> ";
      echo "</tr>";
	  $var=1;
		}
		else
		{			
	  echo "<tr bgcolor=palegreen>";
	  echo "<td>".$rowi['company']."</td><td>" . $rowi['balance']. "</td>";
      echo "</tr>";
	  $var=0;
		}
	}
	?>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr>
	<td><b>Select Company To Update Balance<b>
	<?php 
		echo "<select name='company'>";
		$conn=mysqli_connect("localhost","root","","vehicle_db");
	$sqli = "SELECT* FROM company";
    $resulti = mysqli_query($conn, $sqli);
	while($rowi = mysqli_fetch_assoc($resulti)) {
		echo "<option value=".$rowi['company'].">".$rowi['company']."<option>";
	}
	echo "</select>";
		?></td>
		<td><input type="text" name="amount"><input class="btn btn-danger" type="submit" value="update"></td></tr>
	
	</tbody>
	</table>
	</form>
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

