<?php 
include 'dbc.php';
include 'authen.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];


$query = mysqli_query($connect, "INSERT INTO tbl_author (TBL_AUTHOR_LAST, TBL_AUTHOR_FIRST) 
VALUES('$lname', '$fname') ");
    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='au_index.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }

 ?>