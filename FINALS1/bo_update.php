<?php
include 'dbc.php';
include 'authen.php';
$uid = $_GET['updateid'];

$query = mysqli_query($connect, "SELECT * FROM tbl_book WHERE TBL_BOOK_CODE='$uid'");
while ($row = mysqli_fetch_array($query)) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Book</title>
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
<center><h2>Update Book Details:</h2><center>
<form method="post">
    <table>
        <tr>
            <td>Title:</td>
            <td><input type="text" name="title" value="<?php echo $row['TITLE'];?>"/></td>
        </tr>
        <tr>
            <td>Type:</td>
            <td><input type="text" name="type" value="<?php echo $row['TYPE'];?>"/></td>
        </tr>
        <tr>
            <td>Price:</td>
            <td><input type="text" name="price" value="<?php echo $row['PRICE'];?>"/></td>
        </tr>
        <tr>
            <td>Paperback:</td>
            <td><input type="text" name="pback" value="<?php echo $row['PAPERBACK'];?>"/></td>
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


$title = $_POST['title'];
$pcode = $_POST['pcode'];
$type = $_POST['type'];
$price = $_POST['price'];
$pback = $_POST['pback'];

    $update=mysqli_query($connect, "UPDATE  tbl_book SET TITLE='$title' ,TYPE='$type', PRICE ='$price', PAPERBACK='$pback' WHERE TBL_BOOK_CODE='$uid'");
     
    if ($update) {
    echo "<script>alert('You have successfully updated the data');</script>";
    echo "<script > document.location ='bo_index.php'; </script>";
  	}
  	else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>