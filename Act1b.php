<!DOCTYPE html>
<html>
<head>
	<title>Nested Loop Multiplication Table</title>
</head>
<style>
table, td {
  	height: 10px;
  	margin-right: auto;
  	border-style: solid;
}
td{
	width: 10px;
	color: #000000;
	font-size: 1em;
    }
    </style>
<body>
<?php
echo "<h1>Nested Loop Multiplication Table</h1>";
	echo "<table><tr>";
		for ($x = 1; $x <= 7; $x++) { 
			for ($y = 1; $y <= 7; $y++) { 
				echo "<td>",($x * $y),"</td>";
			}
			if ($x != 10) echo "</tr><tr>";
		}
	?>
</body>
</html>
<!-- Charles Garcia-->
<!-- WD - 201-->