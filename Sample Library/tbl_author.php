<!DOCTYPE html>
<html>
<head>
	<title>Author Page</title>
</head>
<style>
	.hom{
  position: absolute;
  top: 100px;
  left: 150px;
  transform: translate(-50%, -50%);
  color: black;
  font-family: Trebuchet MS;
  font-size: 3em;
}
	.inv{
	position: absolute;
  top: 200px;
  left: 700px;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 2em;
	}
	a{
	text-decoration: none;
	color: white;
}
</style>
<body>
	<div class="picture">
<img src="una.jpg" width="1350" height="635">
</div>
<div class="inv">
	<center><h1>Results</h1></center>
	<center>
<?php 
$num = (int)$_POST['num'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
echo "Num: ", $num."<br>";
echo "Last Name: ", $lname."<br>";
echo "First Name: ", $fname."<br>";
?>
	</center>
</div>
<div class="hom">
    <a href="Home.html">Home</a>
</div>
</body>
</html>