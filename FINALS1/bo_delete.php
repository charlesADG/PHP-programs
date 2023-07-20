<?php 
include 'dbc.php';
include 'authen.php';
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($connect,"DELETE FROM tbl_book WHERE TBL_BOOK_CODE=$rid");
if (sql){
	echo "<script>alert('Data deleted');</script>"; 
	echo "<script>window.location.href = 'bo_index.php'</script>";     
} 
else{
	echo "<script>alert('Data was not deleted');</script>"; 
 
}

}
 ?>}
