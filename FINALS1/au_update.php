<?php
include 'dbc.php';
include 'authen.php';
$uid = $_GET['updateid'];

$query = mysqli_query($connect, "SELECT * FROM tbl_author WHERE tbl_author_num='$uid'");
while ($row = mysqli_fetch_array($query)) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Author</title>
</head>
<style>
table {
        margin-left: auto;
        margin-right: auto;
    }
    
    input[type=text] {
        width: 100%;
        padding: 12px 10px;
        margin: 9px;
        display: inline-block;
        border: 2px solid #ccc;
        box-sizing: border-box;
        background-color:#3CBC8D;
        color: black;
    }
    input[type=submit], input[type=reset]{
        background-color:  #4CAF50;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>
<body>
<center><h2>Update Author Details:</h2><center>
<form method="post">
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="fname" value="<?php echo $row['TBL_AUTHOR_FIRST'];?>"/></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lname" value="<?php echo $row['TBL_AUTHOR_LAST'];?>"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Update Record"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
}
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];

    $update=mysqli_query($connect, "UPDATE  tbl_author SET TBL_AUTHOR_FIRST='$fname',TBL_AUTHOR_LAST='$lname' WHERE TBL_AUTHOR_NUM='$uid'");
     
    if ($update) {
    echo "<script>alert('You have successfully updated the data');</script>";
    echo "<script > document.location ='au_index.php'; </script>";
  	}
  	else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>