<?php 
include 'dbc.php';
include 'authen.php';
if(isset($_GET['delid']))
{
	$rid=intval($_GET['delid']);

	$sql = mysqli_query($connect,"DELETE FROM tbl_publisher WHERE TBL_PUBLISHER_CODE=$rid");
	
	if (sql){
		echo "<script>alert('Data deleted');</script>"; 
		echo "<script>window.location.href = 'pu_index.php'</script>";     
	} 
	else{
		echo "<script>alert('Data was not deleted');</script>"; 
 
	}

}
 ?>