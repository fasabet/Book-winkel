<?php session_start();?>
<!DOCTYPE HTML>
<html>
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
                <h1 class="title">Welcome 
                    <?php
                    if (isset($_SESSION['status'])) {
                        echo $_SESSION['unm'];
                    } else {
                        echo 'to BoekWinkel';
                    }
                    ?>
                </h1>
                <div class="entry">
                    <br>
                    <br>		
                    <object width="500" height="400">
                    <!--<param name="movie" value="somefilename.swf">-->
                        <embed src="HotHotSoftware3DMenu.swf" width="550" height="400">
                        </embed>
                    </object>
                    <br><br>
                </div>
            </div>
        </div>
        <!-- end content -->
        <!-- start sidebar -->
        <div id="sidebar">
            <?php
            include("includes/search.inc.php");
            ?>
        </div>
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
