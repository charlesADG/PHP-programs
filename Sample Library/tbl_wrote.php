<!DOCTYPE html>
<html>
<head>
	<title>Wrote Page</title>
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
$cbook = (int)$_POST['cbook'];
$anum = (int)$_POST['anum'];
$seq = (int)$_POST['seq'];
echo "Book Code: ", $cbook."<br>";
echo "Author Num: ", $anum."<br>";
echo "Sequence: ", $seq."<br>";
?>
	</center>
</div>
<div class="hom">
    <a href="Home.html">Home</a>
</div>
</body>
</html>