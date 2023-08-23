<!DOCTYPE html>
<html lang="en">
<title>Umadevi Trucks & Cranes Service</title>
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
  padding: 7px 16px;
  text-align: left;
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
</nav>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px;margin-top:50px"">

  <!-- Header -->
 
  <div class="w3-container" id="showcase">
	<img src="head2.png" width="100%"><br>
    <h1 class="w3-xxlarge"><b>Welcome to Umadevi Trucks & Cranes Service!</b></h1><br>
    <h3 class="w3-xlarge w3-text-green"><b>Tamilnadu's No:1 Best Truck & Crane Services</b></h3>
    <hr style="width:50px;border:5px solid green" class="w3-round">
  </div>
  <br>

	<div class="container" align="left">
<form>
<?php
 session_start();
$a=$_SESSION["date"];
$b=$_SESSION["vehicle"];
$c=$_SESSION["company"];
$d=$_SESSION["to"];
$e=$_SESSION["material"];
$f=$_SESSION["weight"];
$g=$_POST["freight"];
$h=$_POST["loading"];
$i=$_POST["weighment"];
$j=$_POST["unloading"];
$k=$_POST["store"];
$l=$_POST["other"];
$m=$g+$h+$i+$j+$k+$l;
$n=$_SESSION["advance"];
$o=$m-$n;
$p=$_POST["remark"];
$q=$_SESSION["advancetype"];
$r=$_SESSION["mamul"];
$s=$_POST["commision"];
$t=$_SESSION["cashmode"];
$v=$_SESSION["invoice"];
$w=$_SESSION["bill"];
echo "<div class='container'>";
  echo "<h1 align='center'>Add Accounts</h1>";
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
       echo "<td>".$a."</td>";
      echo "</tr>";    
	  echo "<tr bgcolor='palegreen'>";
        echo "<td>Vehicle No</td>";
        echo "<td>".$b."</td>";
      echo "</tr>";
    echo "<tr>";
      echo " <td>Company</td>";
       echo "<td>".$c."</td>";
      echo "</tr>";  
echo "<tr bgcolor='palegreen'>";
        echo "<td>Invoice No</td>";
        echo "<td>".$v."</td>";
      echo "</tr>";	  
	  echo "<tr>";
        echo "<td>To</td>";
        echo "<td>".$d."</td>";
      echo "</tr>";
	     echo "<tr  bgcolor='palegreen'>";
      echo " <td>Material</td>";
       echo "<td>".$e."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Weight</td>";
        echo "<td>".$f."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Freight</td>";
       echo "<td>".$g."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Loading</td>";
        echo "<td>".$h."</td>";
      echo "</tr>";
	     echo "<tr  bgcolor='palegreen'>";
      echo " <td>Weighment</td>";
       echo "<td>".$i."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Unloading</td>";
        echo "<td>".$j."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Store</td>";
       echo "<td>".$k."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Other</td>";
        echo "<td>".$l."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Total</td>";
       echo "<td>".$m."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Advance</td>";
        echo "<td>".$n."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Balance To pay</td>";
       echo "<td>".$o."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Remark</td>";
        echo "<td>".$p."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Advance Type</td>";
       echo "<td>".$q."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Mamul</td>";
        echo "<td>".$r."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Commision</td>";
       echo "<td>".$s."</td>";
      echo "</tr>";  
	  echo "<tr 	>";
        echo "<td>Cash Mode</td>";
        echo "<td>".$t."</td>";
      echo "</tr>";
	  echo "<tr  bgcolor='palegreen'>";
      echo " <td>Bill Status</td>";
       echo "<td>".$w."</td>";
      echo "</tr>"; 
	  $_SESSION['date']=$a;
	  $_SESSION['vehicle']=$b;
	  $_SESSION['company']=$c;
	  $_SESSION['to']=$d;
	  $_SESSION['material']=$e;
	  $_SESSION['weight']=$f;
	  $_SESSION['freight']=$g;
	  $_SESSION['loading']=$h;
	  $_SESSION['weighment']=$i;
	  $_SESSION['unloading']=$j;
	  $_SESSION['store']=$k;
	  $_SESSION['other']=$l;
	  $_SESSION['total']=$m;
	  $_SESSION['advance']=$n;
	  $_SESSION['balance']=$o;
	  $_SESSION['remark']=$p;
	  $_SESSION['advancetype']=$q;
	  $_SESSION['mamul']=$r;
	  $_SESSION['commision']=$s;
	  $_SESSION['cashmode']=$t;
	  $_SESSION['invoice']=$v;
	  $_SESSION["bill"]=$w;
?>
<tr><td></td><td><button class="btn btn-success" type="button" onclick="window.location.href='incomplete1.php'">Save</button>
<button class="btn btn-danger" type="button" onclick="window.location.href='complete1.php'">Confirm</button></td></tr>
  	  </tbody>
  </table>
</div>
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
