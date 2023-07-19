<!DOCTYPE html>
<html>
<head>
	<title>Inventory Page</title>
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
	<center>
		<h1>Results</h1>
<?php 
$bookc = (int)$_POST['bookc'];
$numb = (int)$_POST['numb'];
$onhnd = (int)$_POST['onhnd'];
echo "Book Code: ", $bookc."<br>";
echo "Branch Num: ", $numb."<br>";
echo "On Hand: ", $onhnd."<br>";
?>
	</center>
</div>
<div class="hom">
    <a href="Home.html">Home</a>
</div>
</body>
</html>