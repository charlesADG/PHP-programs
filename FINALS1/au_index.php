<!DOCTYPE html>
<html>
<head>
    <title>Author Record</title>
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
<h1>Author Record</h1>
<h3><a href="index.php">Go Back to Tables</a> <a href="au_add_form.html">Add New Record</a> </h3>

<table class ='tbl' border="1">
    <tr>
        <th>Author Num</th>
        <th>Author Name</th>

        <th>Action</th>
    </tr>
    <?php 
    include 'dbc.php';
    include 'authen.php';
    $query = mysqli_query($connect, "SELECT * from tbl_author");
    $ctr = 1;
    $oneRecord = mysqli_num_rows($query);
    if ($oneRecord > 0) {
        while ($oneRecord=mysqli_fetch_array($query)) {
     ?>        
             <tr>
                 <td><?php echo $oneRecord['TBL_AUTHOR_NUM']; ?> </td>
                 <td><?php echo $oneRecord['TBL_AUTHOR_LAST']; ?> <?php echo $oneRecord['TBL_AUTHOR_FIRST']; ?> </td>
                 <td>              
                     <a href="au_update.php?updateid=<?php echo htmlentities($oneRecord['TBL_AUTHOR_NUM']);?>">Update</a>
                     <a href="au_delete.php?delid=<?php echo htmlentities($oneRecord['TBL_AUTHOR_NUM']);?>"onclick="return confirm('Do you really want to Delete?')">Delete</a>
                 </td>
             </tr>
<?php
        }
    }
     ?>

</table>
</body>
</html>
