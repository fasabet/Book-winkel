<?php session_start();
require('includes/config.php');
?>
<!DOCTYPE html>
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
                <h1 class="title">Contact us</h1>
                <div class="entry" >
                    <form action="process_contact.php" method="POST">
                        <br>Name :<br>
                        <input type='text' name='nm' size=35>
                        <br><br><br>
                        E-mail ID:<br>
                        <input type='text' name='email' size=35>
                        <br><br><br>
                        Query:<br>
                        <textarea cols="40" rows="10" name='query' ></textarea>
                        <br><br><br>
                        <input  type='submit' name='btn' value='   OK   '  >
                    </form>
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
