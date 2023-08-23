<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>Update Shipment Info</title>
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
    <a href="#designers" onclick="window.location.href='view.php'"class="w3-bar-item w3-button w3-white w3-border w3-hover-white">Track Shippings</a> 
    <a href="#packages" onclick="window.location.href='cb.php'"class="w3-bar-item w3-button w3-hover-white">Payments Balance</a> 
    <a href="#contact" onclick="window.location.href='add1.php'"class="w3-bar-item w3-button  w3-hover-white">Add New Vehicle & Company</a>
  </div>
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
 
<?php
$z=$_POST['sno'];
$conn=mysqli_connect("localhost","root","","vehicle_db");
	$sqli = "SELECT* FROM main where sno='".$z."'";
    $resulti = mysqli_query($conn, $sqli);
	$rowi = mysqli_fetch_assoc($resulti);
	if($rowi['status']=='incomplete')
	{
		echo "<form action='verify1.php' method='post'>";
echo "<div class='container'>";
  echo "<h1 align='center'><b>Update Shipment Info</b></h1>";
  echo "<br> <br>";
  echo "<table class='table'>";
    echo "<thead>";
      echo "<tr bgcolor='darkolivegreen'>";
        echo "<th></th>";
     echo"   <th></th>";
      echo"</tr>";
    echo "</thead>";
	echo "<tbody>";
    echo "<tr>";
      echo " <td>Date</td>";
       echo "<td>".$rowi['date']."</td>";
      echo "</tr>";    
	  echo "<tr bgcolor='palegreen'>";
        echo "<td>Vehicle No</td>";
        echo "<td>".$rowi['vehicle']."</td>";
      echo "</tr>";
    echo "<tr>";
      echo " <td>Company</td>";
       echo "<td>".$rowi['company']."</td>";
      echo "</tr>";  
 echo "<tr bgcolor='palegreen'>";
        echo "<td>Invoice No</td>";
        echo "<td>".$rowi['invoice']."</td>";
      echo "</tr>";	  
	  echo "<tr>";
        echo "<td>To</td>";
        echo "<td>".$rowi['too']."</td>";
      echo "</tr>";
	     echo "<tr  bgcolor='palegreen'>";
      echo " <td>Material</td>";
       echo "<td>".$rowi['material']."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Weight</td>";
        echo "<td>".$rowi['weight']."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Freight</td>";
       echo "<td><input type='text' value='".$rowi['freight']."' name='freight'></td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Loading</td>";
        echo "<td><input type='text' value='".$rowi['loading']."' name='loading'></td>";
      echo "</tr>";
	     echo "<tr  bgcolor='palegreen'>";
      echo " <td>Weighment</td>";
       echo "<td><input type='text' value='".$rowi['weighment']."' name='weighment'></td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Unloading</td>";
        echo "<td><input type='text' value='".$rowi['unloading']."' name='unloading'></td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Store</td>";
      echo "<td><input type='text' value='".$rowi['store']."' name='store'></td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Other</td>";
       echo "<td><input type='text' value='".$rowi['other']."' name='other'></td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Total</td>";
       echo "<td>".$rowi['total']."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Advance</td>";
        echo "<td>".$rowi['advance']."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Balance To pay</td>";
       echo "<td>".$rowi['total']-$rowi['advance']."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Remark</td>";
        echo "<td><input type='text' value='".$rowi['remark']."' name='remark'></td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Advance Type</td>";
       echo "<td>".$rowi['advancetype']."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Mamul</td>";
        echo "<td>".$rowi['mamul']."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Commision</td>";
       echo "<td><input type='text' value='".$rowi['commision']."' name='commision'></td>";
      echo "</tr>";  
	  echo "<tr>";
        echo "<td>Cash Mode</td>";
        echo "<td>".$rowi['cashmode']."</td>";
      echo "</tr>";
	  echo "<tr  bgcolor='palegreen'>";
      echo " <td>Bill Status</td>";
       echo "<td>".$rowi['bill']."</td>";
      echo "</tr>"; 
	  	  
	  $_SESSION['date']=$rowi['date'];
	  $_SESSION['vehicle']=$rowi['vehicle'];
	  $_SESSION['company']=$rowi['company'];
	  $_SESSION['to']=$rowi['too'];
	  $_SESSION['material']=$rowi['material'];
	  $_SESSION['weight']=$rowi['weight'];
	  $_SESSION['advance']=$rowi['advance'];
	  $_SESSION['advancetype']=$rowi['advancetype'];
	  $_SESSION['mamul']=$rowi['mamul'];
	  $_SESSION['cashmode']=$rowi['cashmode']; 	
	  $_SESSION['sno']=$z;
	  $_SESSION['bill']=$rowi['bill'];
	
	echo "<tr><td></td><td><input class='btn btn-success' type='submit' value='continue'>"; 
  	 echo " </tbody>";
  echo "</table>";
echo "</div>";
echo "</form>";
	}
	else
	{
		echo "<script>window.alert('Enter a valid serial number')</script>";
		echo "<br><br><form action='edit.php' method='post'><input type='submit' value='Go Back'></form>";
	}
?>

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

