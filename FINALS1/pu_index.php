<!DOCTYPE html>
<html>
<head>
    <title>Publisher Record</title>
</head>
<style>
.tbl {
  margin-left: auto;
  margin-right: auto;
}
h1,h3,td {
    text-align:center;
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
</style>
<body>
<h1>Publisher Record</h1>
<h3> <a href="index.php">Go Back to Tables</a> <a href="pu_add_form.html">Add Publisher Record</a></h3>

<table class='tbl' border="1">
			<tr>
				<th>TBL_PUBLISHER_CODE</th>
				<th>TBL_PUBLISHER_NAME</th>
				<th>CITY</th>
				<th>Action</th>
			</tr>

			<?php
            include 'dbc.php';
            include 'authen.php';
				$query = mysqli_query($connect, "SELECT * FROM TBL_PUBLISHER");
				$ctr = 1;
				$oneRecord = mysqli_num_rows($query);
				if ($oneRecord > 0) {
					while ($oneRecord=mysqli_fetch_array($query)) {
			?>      

			<tr>
				<td><?php echo $oneRecord['TBL_PUBLISHER_CODE']; ?></td>
				<td><?php echo $oneRecord['TBL_PUBLISHER_NAME']; ?></td>
				<td><?php echo $oneRecord['CITY']; ?></td>
				<td>
					<a href="pu_update.php?updateid=<?php echo htmlentities($oneRecord['TBL_PUBLISHER_CODE']);?>">Update</a> 
		            <a href="pu_delete.php?delid=<?php echo htmlentities($oneRecord['TBL_PUBLISHER_CODE']);?>" onclick="return confirm('Do you really want to Delete?')">Delete</a>
				</td>
			</tr>

			<?php
					}
				}
			?>
		</table>
</body>
</html>
