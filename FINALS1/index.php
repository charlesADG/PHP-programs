<?php 
include 'authen.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<style>
	h2{
		text-align: center;
	}
  a:link, a:visited {
        background-color: black;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        
    }
    a:hover, a:active {
        background-color: red;
    }
    p {
      text-align: center;
    }


	</style>

<body>
	<h2>Welcome <?php echo $_SESSION['username']; ?> to Hau Library </h2>

	<?php 

		include 'dbc.php';
		?>

      <p>
			<a href="au_index.php">Author Table</a> <br><br>
			<a href="bo_index.php">Book Table</a> <br><br>
			<a href="pu_index.php">Publisher Table</a> <br><br>
			<a href="logout.php" style='backgroun-color: red'>Logout</a> <br><br>
  </p>
</body>
</html>