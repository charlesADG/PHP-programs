<?php
include 'dbc.php';
include 'authen.php';
$uid = $_GET['updateid'];

$query = mysqli_query($connect, "SELECT * FROM TBL_PUBLISHER WHERE TBL_PUBLISHER_CODE='$uid'");
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
            <td>Publisher Name:</td>
            <td><input type="text" name="pub" value="<?php echo $row['TBL_PUBLISHER_NAME'];?>"></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="ct" value="<?php echo $row['CITY'];?>"></td>
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
    $pub = $_POST['pub'];
    $ct = $_POST['ct'];
    $update=mysqli_query($connect, "UPDATE  TBL_PUBLISHER SET TBL_PUBLISHER_NAME='$pub', CITY='$ct' WHERE TBL_PUBLISHER_CODE='$uid'");
    if ($update) {
    echo "<script>alert('You have successfully updated the data');</script>";
    echo "<script > document.location ='pu_index.php'; </script>";
  	}
  	else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>