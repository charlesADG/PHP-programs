<?php 
include 'dbc.php';
include 'authen.php';

$pcod = $_POST['pcod'];
$pub = $_POST['pub'];
$ct = $_POST['ct'];

$query = mysqli_query($connect, "INSERT INTO TBL_PUBLISHER (TBL_PUBLISHER_CODE, TBL_PUBLISHER_NAME, CITY) 
VALUES('$pcod', '$pub', '$ct') ");
    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='pu_index.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }

 ?>