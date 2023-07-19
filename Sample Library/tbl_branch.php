<!DOCTYPE html>
<html>
<head>
	<title>Branch Page</title>
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
$bnum = (int)$_POST['bnum'];
$bname = $_POST['bname'];
$bloc = $_POST['bloc'];
$nemp = (int)$_POST['nemp'];
echo "Branch number: ", $bnum."<br>";
echo "Branch name: ", $bname."<br>";
echo "Branch location: ", $bloc."<br>";
echo "Number of Employees: ", $nemp."<br>";
?>
	</center>
</div>
<div class="hom">
    <a href="Home.html">Home</a>
</div>
</body>
</html>