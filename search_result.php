<?php
require('includes/config.php');
 session_start();
	
	
	
	$search=$_GET['s'];
	$query="select *from book where b_nm like '%$search%'";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include("includes/header.php"); ?>
</head>
<body>
<!-- start header -->
    <?php include("includes/head.inc.php"); ?>
<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo @$_GET['cat'];?></h1>
									<div class="entry">
										
										<table border="3" width="100%" >
											<?php
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
									</div>
									
								</div>
								
							</div>
					<!-- end content -->
					
        <!-- start sidebar -->
            <?php
            include("includes/search.inc.php");
            ?>
        <!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
<!-- start footer -->
    <?php
    include("includes/footer.inc.php");
    ?>
<!-- end footer -->
</body>
</html>