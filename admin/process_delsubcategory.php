<?php
require('includes/config.php');
	if(empty($_POST['subcatnm']))
		{
			echo "No Selected Category";
			
		}
		else
		{
	
			
			
			$cid=$_POST['subcatnm'];
			
			$q="delete from fs_subcat where subcat_id = $cid";
			
	mysqli_query($conn,$q) or die("Can't Execute DELETE SUB CATEGORY....");	
			
			$q = "delete from fs_book where b_subcat = ".$cid;
			mysqli_query($q,$link);
			
			header("location:subcategory.php");
		}
?>
	
	