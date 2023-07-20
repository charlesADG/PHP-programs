<!DOCTYPE html>
<html>
<head>
    <title>Book Record</title>
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
<h1>Book Record</h1>
<h3><a href="index.php">Go Back to Tables</a> <a href="bo_add_form.html">Add New Record</a></h3>
<table class='tbl' border="1">
    <tr>
        <th>Book Code</th>
        <th>Title</th>
        <th>Publisher Code</th>
        <th>Type</th>
        <th>Price</th>
        <th>Paperback</th>
        <th>Action</th>
    </tr>
    <?php 
    include 'dbc.php';
    include 'authen.php';
    $query = mysqli_query($connect, "SELECT * from tbl_book");
    $ctr = 1;
    $oneRecord = mysqli_num_rows($query);
    if ($oneRecord > 0) {
        while ($oneRecord=mysqli_fetch_array($query)) {
     ?>        
            <tr>
                <td><?php echo $oneRecord['TBL_BOOK_CODE']; ?> </td>
                <td><?php echo $oneRecord['TITLE']; ?> </td>
                <td><?php echo $oneRecord['TBL_PUBLISHER_CODE']; ?> </td>
                <td><?php echo $oneRecord['TYPE']; ?> </td>
                <td><?php echo $oneRecord['PRICE']; ?> </td>
                <td><?php echo $oneRecord['PAPERBACK']; ?> </td>
                <td>
                    <a href="bo_update.php?updateid=<?php echo htmlentities($oneRecord['TBL_BOOK_CODE']);?>">Update</a>
                     <a href="bo_delete.php?delid=<?php echo htmlentities($oneRecord['TBL_BOOK_CODE']);?>" onclick="return confirm('Do you really want to Delete?')">Delete</a>
                </td>
            </tr>
<?php
        }
    }
     ?>

</table>
</body>
</html>
