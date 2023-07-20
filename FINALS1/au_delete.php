<?php 
include 'dbc.php';
include 'authen.php';
if(isset($_GET['delid']))
{
	$rid=intval($_GET['delid']);
	$sql = mysqli_query($connect, "DELETE TBL_AUTHOR, TBL_BOOK, TBL_TBL_WROTE FROM ((TBL_AUTHOR INNER JOIN TBL_TBL_WROTE ON TBL_AUTHOR.TBL_AUTHOR_NUM = TBL_TBL_WROTE.TBL_AUTHOR_NUM ) INNER JOIN TBL_BOOK ON TBL_BOOK.TBL_BOOK_CODE = TBL_TBL_WROTE.TBL_BOOK_CODE) WHERE TBL_AUTHOR.TBL_AUTHOR_NUM=$rid");
	$sql = mysqli_query($connect,"DELETE FROM tbl_author WHERE TBL_AUTHOR_NUM=$rid");
	
	if (sql){
		echo "<script>alert('Data deleted');</script>"; 
		echo "<script>window.location.href = 'au_index.php'</script>";     
	} 
	else{
		echo "<script>alert('Data was not deleted');</script>"; 
 
	}

}
 ?>