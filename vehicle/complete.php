<html>
<head>
<title>Umadevi Trucks & Cranes Service</title>
  <!-- Add Bootstrap Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
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
header
{
  background-color: #008000;
  top: 30;
}
.mduimage 
{
  position: absolute;
  transform: translateY(-50%);
  top:60;
  left: 300;
  box-shadow:0px 0px 5px 0px #888;
}
.vertical-align {
	position: absolute;
	top: 55%;
	transform: translateY(-50%);
	left: 400;
	width: 50%;
	box-shadow:0px 0px 5px 0px #888;
	background-color:white;
}
</style>
</head>
<body background="nm.png">
<div class="mduimage">
<img src="headd.png" align="middle" height="100" width="1000"><br>
</div>
<br><br><br><br><br><br>
<header>
<button class="button" type="button" onclick="window.location.href='index.php'">Home</button>
<button class="button" type="button" onclick="window.location.href='add.php'">Register New Cargo</button>
<button class="button" type="button" onclick="window.location.href='edit.php'">Update Shipment Info</button>
<button class="button" type="button" onclick="window.location.href='view.php'">Track Shippings</button>
<button class="button" type="button" onclick="window.location.href='add1.php'">Add New Vehicle & Company</button>
</header>
<?php
session_start();
$a=$_SESSION["date"];
$b=$_SESSION["vehicle"];
$c=$_SESSION["company"];
$d=$_SESSION["to"];
$e=$_SESSION["material"];
$f=$_SESSION["weight"];
$g=$_SESSION["freight"];
$h=$_SESSION["loading"];
$i=$_SESSION["weighment"];
$j=$_SESSION["unloading"];
$k=$_SESSION["store"];
$l=$_SESSION["other"];
$m=$_SESSION["total"];
$n=$_SESSION["advance"];
$o=$_SESSION["balance"];
$p=$_SESSION["remark"];
$q=$_SESSION["advancetype"];
$r=$_SESSION["mamul"];
$s=$_SESSION["commision"];
$t=$_SESSION["cashmode"];
$u="complete";
$conn=mysqli_connect("localhost","root","","vehicle_db");
$q1="insert into main (`date`, `vehicle`, `company`, `too`, `material`, `weight`, `freight`, `loading`, `weighment`, `unloading`, `store`, `other`, `total`, `advance`, `balance`, `remark`, `advancetype`, `mamul`, `commision`, `cashmode`, `status`) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."')";
mysqli_query($conn,$q1);
mysqli_close($conn);
?>
<div class="vertical-align"> 
<center><table><tr><td><h3>The Details has been updated succesfully.</h3></td></tr></table><center>
<div>
</body>
</html>