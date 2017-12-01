<?php session_start();
	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:index.php");
	}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>BoekWinkel ITPH</title>
        <link rel="icon" type="imag/png" href="images/itphlogo.png">
        <?php
        include("includes/head.inc.php");
        ?>
    </head>
<body>
    <!-- start header -->
    <div id="header">
        <div id="menu">
            <?php
            include("includes/menu.inc.php");
            ?>
        </div>
    </div>
    <div id="logo-wrap">
        <div id="logo">
            <?php
            include("includes/logo.inc.php");
            ?>
        </div>
    </div>
    <!-- end header -->
<!-- start page -->

<div id="page">
    <!-- start content -->
    <div id="content">
        <div class="post">
            <h1 class="title">Welcome Admin .....</h1>
            <div class="entry">
                Entry...
            </div>

        </div>

    </div>
    <!-- end content -->
    <!-- start sidebar -->

    <!-- end sidebar -->
    <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
    <?php
    include("includes/footer.inc.php");
    ?>
</div>
<!-- end footer -->
</body>
</html>
