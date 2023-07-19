<!DOCTYPE html>
<html>
<head>
	<title>Book Page</title>
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
$bcode = (int)$_POST['bcode'];
$title = $_POST['title'];
$pcode = $_POST['pcode'];
$type = $_POST['type'];
$price = (int)$_POST['price'];
$pback = $_POST['pback'];
echo "Book Code: ", $bcode."<br>";
echo "Title: ", $title."<br>";
echo "Publisher Code: ", $pcode."<br>";
echo "Type: ", $type."<br>";
echo "Price: ", $price."<br>";
echo "Paperback: ", $pback."<br>";
?>
	</center>
</div>
<div class="hom">
    <a href="Home.html">Home</a>
</div>
</body>
</html>